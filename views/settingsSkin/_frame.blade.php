@section('page_title')
    <h2>{{xe_trans('claim::claimManage')}}</h2>
@stop

{{-- include contents blade file --}}
@section('content')
    {!! isset($content) ? $content : '' !!}
@show
