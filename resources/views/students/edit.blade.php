<h1>Edit Student</h1>

<form action="{{ route('students.update', $students->id) }}" method="POST">

    @csrf
    @method('PUT')
    <label>Name</label>
    <input type="text"
           name="name"
           value="{{ $students->name }}">

    <br><br>

    <input type="text"
           name="roll_no"
           value="{{ $students->roll_no }}">

    <br><br>

    <input type="email"
           name="email"
           value="{{ $students->email }}">

    <br><br>

    <select name="department">

        <option value="CSE"
        {{ $students->department=='CSE' ? 'selected' : '' }}>
            CSE
        </option>

        <option value="ECE"
        {{ $students->department=='ECE' ? 'selected' : '' }}>
            ECE
        </option>

        <option value="ME"
        {{ $students->department=='ME' ? 'selected' : '' }}>
            ME
        </option>

    </select>

    <br><br>

    <button type="submit">
        Update Student
    </button>

</form>