<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Api with Axios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            padding-top:8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>hello Laravel</h2>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TITLE</th>
                            <th>DESCRIPTION</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody id="tBody">
                        
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h2>Create Posts</h2>
                <form name="submitForm" >
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" id=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <script src="https://unpkg.com/axios@1.6.7/dist/axios.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        // console.log('hay');
        //READ (CRUD)
        axios.get('/api/post')
             .then(response=>{
                var tableBody = document.getElementById('tBody');
                response.data.forEach(item => {
                    // console.log(item.description);
                    tableBody.innerHTML += '<tr>'+
                                                '<td>'+item.id+'</td>'+
                                                '<td>'+item.title+'</td>'+
                                                '<td>'+item.description+'</td>'+
                                                '<td><button class="btn btn-danger btn-sm me-2">Edit</button>'+
                                                '<button class="btn btn-success btn-sm">Delete</button></td>'+
                                                '</tr>';                
                });
                //console.log(response.data);
                
             })
            .catch(error=>{
                // console.log(error.response.config.url);
                // console.log(error.response.status);
                // console.log(error.response.statusText);
                if(error.response.status == 404){
                    console.log('"'+error.response.config.url+'"   URL not Found');
                    
                }
            });
        
        //CREATE
        var myForm = document.forms['submitForm'];
        // var titleInput = myForm['title'];
        // var descriptionInput = myForm['description'];
    
       
        
        myForm.onclick = function(){
            console.log('hi');
            
        }                    
           
    </script>    
</body>
</html>