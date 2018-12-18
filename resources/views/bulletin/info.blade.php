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
						if($data->id == $info->type_id):
							$short = $data->short;
						endif;
					@endphp
                   	<div class="news-btn {{ ($data->id == $info->type_id) ? 'active' : '' }}">
                   		<a href="/bulletin/list/{{ $data->id }}">◆{{ $data->description }}◆</a>
                   	</div>
                   	@endforeach
                </div>
                <div class="news-info clearfix">
                    <h1>
                        【{{ $short }}】{{ $info->title }}
					    <span class="time">{{ substr($info->created_at, 0, 10) }}</span>
                    </h1>
                    <div class="news-text" style="white-space: pre-line; word-wrap: break-word; word-break: break-all;">
                        {!! $info->content !!}
                    </div>
                </div>
                <div class="news-page news-page2 clearfix">
                    @if(!is_null($prev))
                    <div class="news-page-btn"><a href="/bulletin/info/{{ $prev }}">前一篇</a></div>
                    @endif
                    @if(!is_null($next))
                    <div class="news-page-btn"><a href="/bulletin/info/{{ $next }}">後一篇</a></div>
                    @endif
                </div>
                </div>

            </div>
            </div>

        </div>
@endsection
