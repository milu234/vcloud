<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Laravel</title>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
 
        <link href="css/app.css" rel="stylesheet" type="text/css">
{{--  
        <style>
            body{
                padding-top: 40px;
            }
        </style> --}}
    </head>
    <body>
        <div class="container">
            <h1>
                
            </h1>
 
             <div class="form-group">
                <a href="/export/xlsx" class="btn btn-success">Export to .xlsx</a>
                <a href="/export/xls" class="btn btn-primary">Export to .xls</a>
             </div>
 
             <table class="table table-striped table-bordered ">
                <thead>
                <tr>
                    <th>Staff ID</th>
                    <th>Item Name</th>
                    <th>AssetName</th>
                    <th>Item Count</th>
                    <th>Spareparts</th>
                    <th>Status</th>
                    
                    
                    
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->item_name }}</td>
                    <td>{{ $user->working }}</td>
                    <td>{{ $user->spare }}</td>
                    <td> <div class="material-switch pull-right">
                            <input id="someSwitchOptionDefault" name="someSwitchOption001[]" type="checkbox"/>
                            <label for="someSwitchOptionDefault" class="label-default">Approved</label>
                        </div><td> 
                    
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
 
            {{-- {{ $users->links() }} --}}
 
        </div>
    </body>
</html>
