<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Table with Actions</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <!-- Add Button -->
  <div class="d-flex justify-content-start mb-3">
    <a href="/students/create" class="btn btn-primary" id="addButton">+ Add Student</a>
  </div>

  <!-- Table -->
  <table class="table table-bordered table-hover">
    <thead class="table-light">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Guardian</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($students as $student )
        <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->Guardian->name }}</td>

        <td>
          <a href="/student/{{ $student->id }}" class="btn btn-sm btn-warning">Edit</a>
          <button class="btn btn-sm btn-danger">Delete</button>
        </td>
      </tr>
      @endforeach
      <!-- Add more rows dynamically using JS or backend -->
    </tbody>
  </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
