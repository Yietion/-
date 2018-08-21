@if($identifier == 'encode')
	<div id="test-editormd">
		<textarea name="test-editormd" style="display:none;"></textarea>
	</div>
	@include('markdown::encode', ['editors' => ['test-editormd']])
@else
	<div id="doc-content">
	    <textarea style="display:none;">
{{ $content }}
	    </textarea>
	</div>
	@include('markdown::decode', ['editors'=>['doc-content']])
@endif