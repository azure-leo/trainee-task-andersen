<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container bg-gray-200">
        <div class="pb-8 p-2">
            @if ($errors->any())
                <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                    Something went wrong
                </div>
                <ul class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-2">
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    
        <div class="bg-white py-8 px-6 shadow rounded-lg sm:px-10">
            <form class="mb-0 space-y-6"
            action=" {{ route('messages.store') }}"
            method="POST"
            enctype="multipart/form-data"
            >

            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700" for="name">Name</label>
                <div class="mt-1">
                    <input class="w-full border border-gray-300 px-3 py-2 
                    rounded-lg shadow-sm focus:outline-none focus:border-indigo-500
                    focus:ring-2 focus:ring-indigo-500" type="text" id="name" name="name" value="">
                </div>
            </div>
        
            <div>
                <label class="block text-sm font-medium text-gray-700" for="email">Email</label>
                <div class="mt-1">
                    <input class="w-full border border-gray-300 px-3 py-2 
                    rounded-lg shadow-sm focus:outline-none focus:border-indigo-500
                    focus:ring-2 focus:ring-indigo-500" type="email" id="email" name="email" value="">
                </div>
            </div>
        
            <div>
                <label class="block text-sm font-medium text-gray-700" for="message">Message:</label>
                <div class="mt-1">
                    <textarea class="w-full border border-gray-300 px-3 py-2 
                    rounded-lg shadow-sm focus:outline-none focus:border-indigo-500
                    focus:ring-2 focus:ring-indigo-500" required name="message" id="message" placeholder="Type your message"></textarea>
                </div>
            </div>
        
            <div>
                <button class="w-full flex justify-center py-2 px-4 
                border border-transparent rounded-md shadow-sm text-sm 
                font-medium text-white bg-indigo-600 hover:bg-indigo-700 
                focus:outline-none focus:ring-2 focus:ring-offset-2 
                focus:ring-indigo-500" type="submit">Send</button>
            </div>

        </form>
        </div>
        
    
        @if (isset($messages) && count($messages) > 0)
        <div>
            <h1>There are messages</h1>
        </div>
            
        <div class="bg-white py-8 px-6 shadow rounded-lg sm:px-10">
            @foreach ($messages as $message)
                <div>
                    <div>
                        Name: <strong>{{ $message->name }}</strong>
                    </div>
                    <div>
                        Email: ({{ $message->email }})
                    </div>
                    <div>
                        Created at: {{ $message->created_at }}
                    </div>
                    <div>
                        Message: {{ $message->message }}
                    </div>                    
                    <br>
                </div>
            @endforeach
        </div>
        @endif
    </div>
    

</body>
</html>

