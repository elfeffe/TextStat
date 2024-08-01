<?php

namespace Elfeffe\TextStat;

class TextStat {
    // Function to dynamically call any textstat method
    public function analyzeText($text, $methodName)
    {
        $pythonPath = config('textstat.python_path'); // Path to the Python executable
        $scriptPath = realpath(__DIR__ . '/../Python/textstat_analyzer.py'); // Path to the Python script
        $escapedText = escapeshellarg($text); // Ensure text is safe for shell execution
        $escapedMethod = escapeshellarg($methodName); // Ensure method name is safe for shell execution
        $command = "{$pythonPath} {$scriptPath} $escapedText $escapedMethod";
        $output = shell_exec($command);
        return json_decode($output, true);
    }

    // Dynamically invoke a method
    public function __call($method, $arguments)
    {
        // Convert method name to textstat function format by converting camelCase to snake_case
        $methodName = $this->toSnakeCase($method);

        if (count($arguments) === 1) {
            return $this->analyzeText($arguments[0], $methodName);
        }
        throw new \Exception("Method $method requires exactly one argument.");
    }

    // Helper function to convert CamelCase to snake_case
    private function toSnakeCase($input)
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $input));
    }
}
