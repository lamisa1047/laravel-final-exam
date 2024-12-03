<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    
  
</head>
<body>
    
    <h1>Employee Details</h1>

    <div class="details-container">
        <div class="detail-item"><strong>ID:</strong> {{ $employee->id }}</div>
        <div class="detail-item"><strong>Name:</strong> {{ $employee->name }}</div>
        <div class="detail-item"><strong>Email:</strong> {{ $employee->email }}</div>
        <div class="detail-item"><strong>Age:</strong> {{ $employee->age }}</div>
    </div>


</body>
</html>

