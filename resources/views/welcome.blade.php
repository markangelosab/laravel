<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Expense Tracker</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 text-center">
        <h1>Welcome to the Expense Tracker</h1>
        <p class="lead">Track your expenses efficiently.</p>
        <a href="{{ route('expenses.index') }}" class="btn btn-primary">Go to Expense Tracker</a>
    </div>
</body>
</html>
