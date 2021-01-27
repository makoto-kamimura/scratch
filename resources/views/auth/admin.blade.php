{{-- user.blade.phpからadmin.blade.phpに変更 --}}
@extends('common.layout')

@section('tagu')
  {{$tagu}}
@endsection

@section('title2')
  {{$title2}}
@endsection

@section('body')
    <section>
	    <!--<h1>■@yield('title1')</h1>-->
        <p class="btn04"><a href="{{route('user.create')}}"></a></p>
    </section>
	<section>
        <h1>@yield('title2')</h1>
        <table border="1" class="m0a tac approval">
            <tr> 
                <th style="display:none">cd</th>
                <th>社員コード</th>
                <th>所属部門/所属課</th>
                <th>名前</th>
                <th>退職日</th>
                <th>システム管理者</th>
            </tr>
            @if (isset($users))
            @foreach ($users as $user)
            <tr>
                <td style="display:none">$user->user_cd</td>
                <td>$user->user_disp_cd</td>
                <td>$user->dep_div_name</td>
                <td>$user->user_name</td>
                <td>$user->taishoku_date</td>
                <td>$user->sys_admin</td>
            </tr>
            @endforeach 
            @endif
        </table>
	</section>
@endsection