<#
var field = data.field,
name  = data.name,
placeholder  = field.placeholder;
rows = field.rows;
cols = field.cols;
value    = 'object' === typeof data.value ? JSON.stringify( data.value ) : data.value;

value.replace( '&', '&amp;' )
.replace( '"', '&quot;' )
.replace( "'", '&#039;' )
.replace( '<', '&lt;' )
.replace( '>', '&gt;' );
#>
<textarea name="{{name}}" rows="{{rows}}"
          cols="{{cols}}" <# if ( placeholder ) { #>placeholder="{{placeholder}}" <# } #>> {{value}} </textarea>