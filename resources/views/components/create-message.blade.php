<div class="offset-md-2"></div>
<div class="col-md-8">
    <h2 class="text-center">Message for widget {{ $widgetId }}</h2>
    <form class="full-width" name="send-email" method="POST" action="{{ route('create-message') }}"
          enctype="multipart/form-data">
        {{ csrf_field() }}
        @if ($errors->has('name'))
            <span class="help-block">
                                    <strong style="color:#8D121A">{{ $errors->first('name') }}</strong>
                                </span>
        @endif
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
        </div>
        @if ($errors->has('email'))
            <span class="help-block">
                                    <strong style="color:#8D121A">{{ $errors->first('email') }}</strong>
                                </span>
        @endif
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Enter email">
        </div>
        @if ($errors->has('message'))
            <span class="help-block">
                                    <strong style="color:#8D121A">{{ $errors->first('message') }}</strong>
                                </span>
        @endif
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message" rows="3"></textarea>
        </div>

        <input type="hidden" name="widget_id" value="{{ $widgetId }}">

        <button type="submit" class="btn btn-success">Send</button>
    </form>
</div>
