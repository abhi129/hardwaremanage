<html>
<head>
<title>
Employee Details
</title>
</head>
<body>
<table>
<thead>
<th>S No.</th>
<th>Employee Name</th>
<th>Employee Department</th>
<th>Assigned Hardware</th>
<th>Assigned Duration</th>
</thead>
-- <tbody>
 @for($i=1;$i<=DB::table('Employees')->count();$i++)
 <tr>
 <?php $result=DB::table('Employees')->where('emp_id','=',$i)->get()?>
 <td>{{$result{0}->emp_id}}</td>
 <td>{{$result{0}->emp_name}}</td>
 <td>{{$result{0}->emp_dept}}</td>
 <td>{{$result{0}->emp_assign}}</td>
 <td>{{$result{0}->emp_dur}}</td>
 </tr>
 @endfor 
</table>
</body>
</html>