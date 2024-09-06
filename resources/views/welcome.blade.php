<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>AAS Exam</title>
</head>
<body>


    <div class="flex min-h-screen max-w-[1200px] items-center justify-center">

        <form action="http://localhost:8000/api/position" method="POST" class="">

            <div class="flex items-center justify-center">
                <div class="min-w-[400px]  border-black p-4">
                    <!-- Name -->
                    <div class="flex items-center justify-between mb-4 ">
                        <p class="text-lg">Name:</p>
                        <input class="flex w-48 border-[1px] border-black rounded-md ml-auto" type="text" name="position">
                    </div>

                    <!-- Reports_to -->
                    <div class="flex items-center justify-between mb-4">
                        <p class="text-lg">Reports to:</p>
                        <select id="reports_to" name="reports_to" class="flex w-48 border-[1px] border-black rounded-md ml-auto">
                            @foreach($positions as $position)
                                <option value="{{ $position->id }}">{{ $position->position }}</option>
                            @endforeach
                        </select>  
                    </div>
                    
                    <!-- Submit -->
                    <div class="flex justify-end">
                        <button type="submit" class="bg-gray-100 border-[1px] border-black px-4 rounded-md hover:bg-gray-600 hover:text-white">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
            
            @if($positions->isEmpty())
            <p class="text-center text-gray-600">No positions available.</p>
            @else
                <div class="min-w-[800px] border-black p-4">
                    
                    <table class="min-w-full border-collapse border border-black">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border border-black px-2 text-center">Position</th>
                                <th class="border border-black px-2 text-center">Reports To</th>
                                <th class="border border-black px-2 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($positions as $position)
                                <tr>
                                    <td class="border border-black px-2">{{ $position->position }}</td>
                                    @if(is_null($position->reports_to))
                                        <td class="border border-black px-2">{{ $position->reports_to }}</td>
                                    @else
                                        <td class="border border-black px-2">{{ $position->assignTo->position }}</td>
                                    @endif
                                    <td class="border border-black px-2">
                                        <div class="flex items-center justify-center ">
                                            @php
                                                $appUrl = config('app.url');
                                            @endphp

                                            <!-- Edit Button -->
                                            <form action="{{ $appUrl }}/api/position/{{ $position->id }}" method="POST" class="inline">
                                                @csrf
                                                @method('PUT') 
                                                <button type="submit" class="fas fa-edit text-gray-500 hover:text-gray-700 mr-2"></button>
                                            </form>

                                            <!-- Delete Button -->
                                            <form action="{{ $appUrl }}/api/position/{{ $position->id }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE') 
                                                <button type="submit" class="fas fa-trash-alt text-gray-500 hover:text-gray-700"></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </form>
    </div>
</body>
</html>