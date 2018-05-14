@foreach($activity as $activity)
@if($activity->completion == 'No')
                            <tr>
                               
                                <td colspan="20">{{$activity->student_id}}</td>
                                <td colspan="20">{{$activity->student_name}}</td>
                                <td colspan="20">{{$activity->lecturer}}</td>
                                
                            </tr>
                            @endif
                           
                            @endforeach