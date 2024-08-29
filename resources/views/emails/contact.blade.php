<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #dddddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        td {
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>CWW Contact Form:</h2>
    <b>First Name: </b> {{ $contactData['firstname'] }} <br />
    <b>Last Name: </b> {{ $contactData['lastname'] }} <br />
    <b>Email: </b> {{ $contactData['email'] }} <br />
    <b>Department: </b> {{ $contactData['department'] }} <br />
    <b>Category: </b> {{ $contactData['category'] }} <br />
    <b>Message: </b> {{ $contactData['message'] }} <br />
    <!-- <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>First Name</td>
            <td>{{ $contactData['firstname'] }}</td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>{{ $contactData['lastname'] }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $contactData['email'] }}</td>
        </tr>
        <tr>
            <td>Department</td>
            <td>{{ $contactData['department'] }}</td>
        </tr>
        <tr>
            <td>Category</td>
            <td>{{ $contactData['category'] }}</td>
        </tr>
        <tr>
            <td>Message</td>
            <td>{{ $contactData['message'] }}</td>
        </tr>
    </table> -->
</body>
</html>
