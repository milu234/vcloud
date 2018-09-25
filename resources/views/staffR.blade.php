@extends('layouts.dashboard')

    @section('staff')
    <h1 class="add">StakeHolder</h1>
    <table class="table table-striped table-hover table-bordered" class="display" id="mydatatable">
            <thead>
                <tr>
                    <th>Staff Name</th>
                    <th>Item Name</th>
                    <th>Item Count</th>
                    <th>Dept Name</th>
                    <th  style="width:150px">Check availability</th>
                    <th style="width:190px">Send Request to Others</th>
                    <th style="width:200px">Send Request to Teachers</th>
                    
                    
                </tr>
            </thead>
            <tbody>
              
                
                <td>Jayashree Hajgude</td>
                <td>Aurdino</td>
                <td>6</td>
                <td>IT</td>
                <td id="check" class="check">Check Availabilaty</td>
                <td id="others" class="others">Request to others</td>
                <td id="teachers" class="teachers">Request to teachers</td>
                </tr> 
                @foreach ($data as $item)
                    <td>Jayashree Hajgude</td>
                    <td>{{$item->item_name}}</td>
                    <td>6</td>
                    <td>IT</td>
                    <td id="check" class="check">Check Availabilaty</td>
                    <td id="others" class="others">Request to others</td>
                    <td id="teachers" class="teachers">Request to teachers</td>
                    
                @endforeach
                
               
            </tbody>    
            </table>   
            @stop
    
