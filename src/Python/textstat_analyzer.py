import sys
import json
import textstat

def analyze_text(text, method_name):
    try:
        # Dynamically get the method from the textstat module
        method = getattr(textstat, method_name)
        # Call the method and return the result
        result = method(text)
        return result
    except AttributeError as e:
        return json.dumps({"error": f"AttributeError - {str(e)}"})

if __name__ == "__main__":
    input_text = sys.argv[1]
    method_name = sys.argv[2]
    # Fix: Use `input_text` instead of `text`
    print(analyze_text(input_text, method_name))
