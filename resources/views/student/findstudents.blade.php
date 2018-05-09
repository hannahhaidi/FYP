

@foreach($activity as $activity)
@if($activity->completion == 'No')
                            <tr>
                               
                                <td colspan="20">{{$activity->user_id}}</td>
                                <td colspan="20">{{$activity->student_name}}</td>
                       
                                
                            </tr>
                            @endif
                           
                            @endforeach