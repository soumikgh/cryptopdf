<div class="login_entry" id="parentEmailContainer" style="display:none">
    <div class="floatInstrux">
        <qf:required><span class="required">*</span></qf:required>
        <qf:label><label for="{id}">{label}</label></qf:label>
    </div>
    <div class="floatForm <qf:error> error</qf:error>">
        <qf:error><span class="error">{error}<br /></span></qf:error>{element}
    </div>
    <div><br clear="left" /></div>
</div>