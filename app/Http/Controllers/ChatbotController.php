<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function chat(Request $request)
    {
        // Get the user's message from the request
        $message = $request->input('message');

        // Process the user's message and generate a response
        $response = $this->processMessage($message);

        // Return the response as JSON
        return response()->json(['message' => $response]);
    }

    private function processMessage($message)
    {
        // Add your chatbot logic here
        // You can use if-else statements or switch cases to handle different messages

        // Example: Echo back the user's message
        return "You said: " . $message;
    }
}
