<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        @if(!empty($success))
            <h1>{{$success}}</h1>
        @endif

    <form action="http://localhost:8000/api/position" method="POST">

        
        <h1>Name:</h1> 
            <input type="text" name="position">
        <h2>Reports to:</h2>

            <select id="reports_to" type="text" name="reports_to">
                @foreach($positions as $position)
                    <option value="{{ $position->id }}">{{ $position->position }}</option>
                @endforeach

        </select>  

        <button type="submit">Submit</button>

        <h1>Table View</h1>
            
            @if($positions->isEmpty())
                <p>No positions available.</p>
            @else
                <table border="1">
                    <thead>
                        <tr>
                            <th>Position</th>
                            <th>Reports To</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($positions as $position)
                            <tr>
                                <td>{{ $position->position}}</td>
                                @if(is_null($position->reports_to))
                                <td>{{ $position->reports_to }}</td>
                                @else
                                <td>{{ $position->assignTo->position }}</td>
                                @endif
                                <td>
                                    <button>Edit</button>&nbsp;
                                    <button>Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

    </form>
</body>
</html>