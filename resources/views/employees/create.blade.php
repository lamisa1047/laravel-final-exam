<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Create page</title>
</head>
<body>
    
<form method="POST" action="{{ route('store') }}">

        @csrf 
        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="age">Age</label>
        <input type="number" name="age">
        <button>Submit</button>
    </form>
   
</body>
</html>