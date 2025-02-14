#!/usr/bin/env python3
import sys

def main():
    if len(sys.argv) != 4:
        print("Content-Type: text/html\n")
        print("<html><body><h2>Error: Incorrect number of arguments provided.</h2></body></html>")
        return

    try:
        num1 = float(sys.argv[1])
        num2 = float(sys.argv[2])
        operation = sys.argv[3].lower()
    except ValueError:
        print("Content-Type: text/html\n")
        print("<html><body><h2>Error: Non-numeric input provided.</h2></body></html>")
        return

    result = None
    error_message = ""

    if operation == "add":
        result = num1 + num2
    elif operation == "sub":
        result = num1 - num2
    elif operation == "mul":
        result = num1 * num2
    elif operation == "div":
        if num2 == 0:
            error_message = "Division by zero is not allowed."
        else:
            result = num1 / num2
    else:
        error_message = "Invalid operation selected."

    if error_message:
        print("Content-Type: text/html\n")
        print("<html><body>")
        print(f"<h2>Error: {error_message}</h2>")
        print("</body></html>")
        return


    if result > 100:
        result *= 2
    if result < 0:
        result += 50

    print("Content-Type: text/html\n")
    print("<html><body>")
    print("<h2>Calculation Result</h2>")
    print(f"<p>The result is: {result}</p>")
    print("</body></html>")

if __name__ == "__main__":
    main()
