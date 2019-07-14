<html>
<head>
    <style>
        body {
            font-size: 16px;
            font-family: 'Arial', sans-serif;
        }

        pre, code {
            font-family: Monaco, monospace;
        }

        table, th, td {
            border: thin solid #000
        }

        table {
            border-collapse: collapse;
            border: 2px solid #000;
        }

        thead {
            border-bottom: 2px solid #000;
        }

        tfoot {
            border-top: 2px solid #000;
        }

        th, td {
            padding: 5px;
        }

        th {
            background: #666;
            color: #fff;
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
    <pre>@php var_dump($codeModel->years()) @endphp</pre>
    <pre>{{ $codeModel->years(',') }}</pre>
    <pre>@php var_dump($codeModel->companies()) @endphp</pre>
    <pre>{{ $codeModel->companies(',') }}</pre>
    <pre>@php var_dump($codeModel->dayTypes()) @endphp</pre>
    <pre>{{ $codeModel->dayTypes(',') }}</pre>
    <pre>@php var_dump($codeModel->projects()) @endphp</pre>
    <pre>{{ $codeModel->projects(',') }}</pre>
    <pre>@php var_dump($codeModel->dbLogActions()) @endphp</pre>
    <pre>{{ $codeModel->dbLogActions(',') }}</pre>

    <h2>Entry</h2>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Item</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title_item }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
