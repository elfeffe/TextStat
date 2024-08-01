<?php

namespace Elfeffe\TextStat;

class TextStat {
    public function analyzeText($text, $methodName)
    {
        $pythonPath = config('textstat.python_path');
        $scriptPath = realpath(__DIR__ . '/Python/textstat_analyzer.py');
        $escapedText = escapeshellarg($text);
        $escapedMethod = escapeshellarg($methodName);
        $command = "{$pythonPath} {$scriptPath} $escapedText $escapedMethod";

        $output = shell_exec($command);
        return json_decode($output, true);
    }

    public function __call($method, $arguments)
    {
        $methodName = $this->toSnakeCase($method);

        if (count($arguments) === 1) {
            return $this->analyzeText($arguments[0], $methodName);
        }

        throw new \Exception("Method $method requires exactly one argument.");
    }

    private function toSnakeCase($input)
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $input));
    }
}
