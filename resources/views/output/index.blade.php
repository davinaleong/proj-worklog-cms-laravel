<html>
<head>
    <style>
        table, th, td {
            border: thin solid #000
        }
    </style>
</head>
<body>
    <h1>Output</h1>

    <h2>Current</h2>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $year->id }}</td>
            <td>{{ $year->title_year }}</td>
        </tr>
        <tr>
            <td>{{ $company->id }}</td>
            <td>{{ $company->title_company }} ({{ $company->code_company }})</td>
        </tr>
        </tbody>
    </table>

    <h2>Model Codes</h2>
    <pre>@php var_dump($codeModel->dayTypes()) @endphp</pre>
    <pre>{{ $codeModel->dayTypes(',') }}</pre>
    <pre>@php var_dump($codeModel->projects()) @endphp</pre>
    <pre>{{ $codeModel->projects(',') }}</pre>
    <pre>@php var_dump($codeModel->dbLogActions()) @endphp</pre>
    <pre>{{ $codeModel->dbLogActions(',') }}</pre>
</body>
</html>
