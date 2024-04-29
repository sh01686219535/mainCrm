<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>address</th>
                <th>city</th>
                <th>state</th>
                <th>company</th>
                <th>position</th>
                <th>zip_code</th>
                <th>country</th>
                <th>website</th>
                <th>description</th>
                <th>status</th>
                <th>source</th>
                <th>sales_people_id</th>
                <th>team_leader_id</th>
             
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($leads as $users)
                <td data-column="name">{{$users->name}}</td>
                <td data-column="email">{{$users->email}}</td>
                <td data-column="phone">{{$users->phone}}</td>
                <td data-column="address">{{$users->address}}</td>
                <td data-column="city">{{$users->city}}</td>
                <td data-column="state">{{$users->state}}</td>
                <td data-column="company">{{$users->company}}</td>
                <td data-column="position">{{$users->position}}</td>
                <td data-column="zip_code">{{$users->zip_code}}</td>
                <td data-column="country">{{$users->country}}</td>
                <td data-column="website">{{$users->website}}</td>
                <td data-column="description">{{$users->description}}</td>
                <td data-column="status">{{$users->status}}</td>
                <td data-column="source">{{$users->source}}</td>
                <td data-column="sales_people_id">{{$users->sales_people_id}}</td>
                <td data-column="team_leader_id">{{$users->team_leader_id}}</td>
                @endforeach
                
            </tr>
        </tbody>
    </table>
</body>
</html>