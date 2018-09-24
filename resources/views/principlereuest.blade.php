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
                    <th>Name</th>
                    <th>Status_Id</th>
                    <th>AssetName</th>
                    <th>Working</th>
                    <th>Status</th>
                    
                    
                    
                    
                </tr>
                </thead>
                <tbody>
                    @foreach($req as $reqs)
                    <tr>
                    <td>{{ $reqs->request_type }}</td>
                    <td>{{ $reqs->status_id }}</td>
                    <td>{{ $reqs->item_name }}</td>
                    <td>{{ $reqs->item_count }}</td>
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
