<div class="ui form">

  <div class="ui grid">
    <div class="sixteen wide column"></div>

    <div class="four wide column"></div>
    <div class="eight wide column">
      <label>Code</label>
      <input id="exam_term_code" type="text" name="exam_term_code" placeholder="Code" required="">
    </div>
    <div class="four wide column"></div>

    <div class="four wide column"></div>
    <div class="eight wide column">
      <label>Name</label>
      <input id="exam_term_name" type="text" name="exam_term_name" placeholder="Name" required="">
    </div>
    <div class="four wide column"></div>


    <div class="four wide column"></div>
    <div class="four wide column">
      <label>Start Date</label>
      <div class='input-group date' id='s_date'>
        <input id="exam_term_start_date" type='text' name="exam_term_start_date" placeholder="Start Date" required="">
        <span class="input-group-addon">
          <span class="glyphicon glyphicon-calendar"></span>
        </span>
      </div>
    </div>
    <div class="four wide column">
      <label>End Date</label>
      <div class='input-group date' id='e_date'>
        <input id="exam_term_end_date" type='text' name="exam_term_end_date" placeholder="End Date" required="">
        <span class="input-group-addon">
          <span class="glyphicon glyphicon-calendar"></span>
        </span>
      </div>
    </div>
    <div class="four wide column"></div>



    <div class="four wide column"></div>
    <div class="eight wide column">
      <label>Description</label>
      <textarea id="exam_term_description" name="exam_term_description" rows="2"></textarea>
    </div>
    <div class="four wide column"></div>

    <div class="six wide column"></div>
    <div class="four wide column">
      <div class="save-button">
        <button class="fluid huge ui primary button">
          @if (strpos(Route::current()->getName(), 'create') !== false)
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
