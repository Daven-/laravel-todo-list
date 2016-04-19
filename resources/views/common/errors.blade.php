<!--
@Author: Daven
@Date:   2016-04-19T11:55:52-07:00
@Email:  daven1919@gmail.com
@Last modified by:   Daven
@Last modified time: 2016-04-19T11:56:07-07:00
-->



@if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>Whoops! Something went wrong!</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
