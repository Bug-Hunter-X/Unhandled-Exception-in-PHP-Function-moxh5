# Unhandled Exception in PHP Function

This example showcases a common error in PHP: failing to handle potential exceptions within a function.  The `myFunction()` is called without any error handling mechanism (try-catch block), making the script vulnerable to unexpected termination if an exception occurs within the function.

The solution demonstrates the use of a try-catch block to gracefully handle potential exceptions, preventing the script from crashing and providing a more robust and reliable execution.
