<!-- app\views\insertemp.blade.php -->
<html>



<body style="color:blue;margin-left:30px;>
{{Form::open(array ('action' =>'EmployeeController@InsertEmplyee'))}}

{{Form::label('Emp_name','Employee Name :')}}
{{Form::text('emp_name','Enter the name', array('id' => 'teachers_name'))}}
<br>
<br>
{{Form::label('emp_dept','Departement of employee:')}}

{{Form::text('emp_dept','Enter departement here', array('id'=>'emp_dept'))}}
<br>
<br>
{{Form::label('emp_assign','Assigned Hardware :')}}

{{Form::text('emp_assign','Enter hardware here', array('id'=>'emp_assign'))}}
<br>
<br>
{{Form::label('emp_dur','Assigned Duaration :')}}
{{Form::number('emp_dur'),100,array('min'=>1,'max'=>365,'id'=>'emp_dur')}}
<br>
<br>
{{Form::submit('save')}}
{{Form::close()}}
</body>

</html>

