<div class="ui form">

  <div class="ui grid">
    <div class="sixteen wide column"></div>

    <div class="four wide column"></div>
    <div class="eight wide column">
      <label>Code</label>
      @if(!empty($exam_term->id))
      <input id="code" type="text" name="code" placeholder="Code" required="" value="{{$exam_term->code}}">
      @else
      <input id="code" type="text" name="code" placeholder="Code" required="">
      @endif
    </div>
    <div class="four wide column"></div>

    <div class="four wide column"></div>
    <div class="eight wide column">
      <label>Name</label>
      @if(!empty($exam_term->id))
      <input id="name" type="text" name="name" placeholder="Name" required="" value="{{$exam_term->name}}">
      @else
      <input id="name" type="text" name="name" placeholder="Name" required="">
      @endif
    </div>
    <div class="four wide column"></div>


    <div class="four wide column"></div>
    <div class="four wide column">
      <label>Start Date</label>
      <div class='input-group date' id='s_date'>
        @if(!empty($exam_term->id))
        <input id="start_date" type='text' name="start_date" placeholder="Start Date" required="" value="{{$exam_term->start_date}}">
        @else
        <input id="start_date" type='text' name="start_date" placeholder="Start Date" required="">
        @endif
        <span class="input-group-addon">
          <span class="glyphicon glyphicon-calendar"></span>
        </span>
      </div>
    </div>
    <div class="four wide column">
      <label>End Date</label>
      <div class='input-group date' id='e_date'>
        @if(!empty($exam_term->id))
        <input id="end_date" type='text' name="end_date" placeholder="End Date" required="" value="{{$exam_term->end_date}}">
        @else
        <input id="end_date" type='text' name="end_date" placeholder="End Date" required="">
        @endif
        <span class="input-group-addon">
          <span class="glyphicon glyphicon-calendar"></span>
        </span>
      </div>
    </div>
    <div class="four wide column"></div>



    <div class="four wide column"></div>
    <div class="eight wide column">
      <label>Description</label>
      @if(!empty($exam_term->id))
      <textarea id="description" name="description" rows="2">{{$exam_term->description}}</textarea>
      @else
      <textarea id="description" name="description" rows="2"></textarea>
      @endif
    </div>
    <div class="four wide column"></div>

    <div class="six wide column"></div>
    <div class="four wide column">
      <div class="save-button">
        <button class="fluid huge ui primary button">
          @if(empty($exam_term->id))
          {{ trans('forms.save') }}
          @else
          {{ trans('forms.update') }}
          @endif
        </button>
      </div>
    </div>
    <div class="six wide column"></div>

  </div>
</div>
