<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Price List</h1>

<table id="customers">
  <tr>
    <th>Name</th>
    <th>Disk</th>
    <th>Emails</th>
  </tr>
  @foreach ($prices as $price)
  <tr>
    <td>{{ $price->name }}</td>
    <td>{{ $price->disk }}</td>
    <td>{{ $price->emails }}</td>
  </tr>
  @endforeach
 
 
</table>

</body>
</html>


