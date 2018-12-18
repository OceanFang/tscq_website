@extends('layouts.app')
@section('content')

    <div class="wrap2">
        <div class="logo2">
            <a href="/">
                <img src="/images/logo.png" alt="吞噬蒼穹" title="回《吞噬蒼穹》首頁">
            </a>
        </div>
        <div class="content-wrap">
            <div class="topbtn" title="回頁首"></div>
            <div class="content news">
                <div class="main clearfix">
				<div class="news-nav2 clearfix">
					@foreach($type_list as $data)
					@php
						if($data->id == $id):
							$short = $data->short;
						endif;
					@endphp
                   	<div class="news-btn {{ ($data->id == $id) ? 'active' : '' }}">
                   		<a href="/bulletin/list/{{ $data->id }}">◆{{ $data->description }}◆</a>
                   	</div>
                   	@endforeach
                </div>

                <div class="news-list clearfix">
                    <ul class="clearfix">
                      	@foreach($list as $val)
      			            <li>
            							<a href="/bulletin/info/{{ $val->id }}">
            								<span class="label">【{{ $short }}】</span>
            								<span class="tit" >{{ $val->title }}</span>
            								<span class="time">{{ substr($val->created_at, 0, 10) }}</span>
            							</a>
            						</li>
            						@endforeach
					          </ul>
                </div>

                @if ($list->hasPages())
                <div class="news-page news-page1 clearfix">
                    @if ($list->onFirstPage())
                      <div class="news-page-btn"></div>
                    @else
                      <div class="news-page-btn"><a href="{{ $list->url(1)  }}">第一頁</a></div>
                      <div class="news-page-btn"><a href="{{ $list->previousPageUrl() }}">上一頁</a></div>
                    @endif

                    <select id="page_sel">
                      @for( $i = 1; $i <= $list->lastPage(); $i++)
                        @php
                          $selected = ($i == $page) ? 'selected' : '';
                        @endphp
                        <option value="{{ $list->url($i) }}" {{ $selected }}>{{$i}}</option>
                      @endfor
                    </select>

                    <div class="news-page-btn"><a href="{{ $list->nextPageUrl() }}">下一頁</a></div>
                    <div class="news-page-btn"><a href="{{ $list->url($list->lastPage()) }}">最後頁</a></div>
                </div>
                @endif

                </div>

            </div>
            </div>

        </div>

    @section('js')
    <script>
      $(function() {
          $('#page_sel').on('change', function() {
            var url = $(this).val();
            window.location.href = url;
          });
      });
    </script>
    @stop
@stop
