<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h3 class="mb-4">Add Student</h3>


    <!-- Form Start -->
    <form action="/student/create" method="POST">
        @csrf
        <div class="mb-3">
            <label for="student_name" class="form-label">Email:</label>
            <input type="text" name="student_name" class="form-control" placeholder="Enter student name" value="{{ old('student_name') }}">
        </div>

        <div class="mb-3">
            <label for="student_name" class="form-label">Student Name</label>
            <input type="text" name="student_name" class="form-control" placeholder="Enter student name" value="{{ old('student_name') }}">
        </div>


        <div class="mb-3">
            <label for="guardian_id" class="form-label">Guardian</label>
            <select name="guardian_id" class="form-select">
                <option value="">-- Select Guardian --</option>
                @foreach($guardians as $guardian)
                    <option  value={{ $guardian->id }}>
                        {{ $guardian->name }} - {{ $guardian->address }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Save Student</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
