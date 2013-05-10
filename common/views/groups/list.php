<div id="content_messageboard">
    <table style="width:100%" class="data" id="groups_own">
        <thead>
        <tr class="bg_blue">
            <th class="headerLineL" width="158">
                <div class="headerWhite">Groups I Own<br/>
                <span style="font-weight:normal">
                <script language="javascript" type="text/javascript">
                    <!--
                    if (isMobile == null) {
                        document.write('(Click to<br />change name)');
                    }
                    else {
                        document.write('(Tap to<br />change name)');
                    }
                    // -->
                </script>
                <noscript>Please turn Javascript on for instructions.</noscript>
                </div>
            </th>
            <th class="headerLine">
                <div class="headerWhite">Access ID</div>
            </th>
            <th class="headerLine">
                <div class="headerWhite">Password  <br />
                <span style="font-weight:normal">
                <script language="javascript" type="text/javascript">
                    <!--
                    if (isMobile==null)
                    {
                        document.write('(Click to<br />change password)');
                    }
                    else
                    {
                        document.write('(Tap <br />change password)');
                    }
                    // -->
                </script>
                <noscript>Please turn Javascript on for instructions.</noscript>
                </div>
            </th>
            <th class="headerLine">
                <div class="headerWhite">Group URL<br/>
            <span style="font-weight:normal">
                <script language="javascript" type="text/javascript">
                    <!--
                    if (isMobile == null) {
                        document.write('(Right-click or CTRL-click <br />to copy link)');
                    }
                    else {
                        document.write('(Tap link<br />and copy it)');
                    }
                    // -->
                </script>
                <noscript>Please turn Javascript on for instructions.</noscript>
            </span>
                </div>
            </th>
            <th class="headerLine">
                <div class="headerWhite">Actions</div>
            </th>
            <th class="headerLine">
                <div class="headerWhite">Message Board</div>
            </th>
            <th class="headerLineR">
                <div class="headerWhite">Leaderboards</div>
            </th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($groups) && count($groups) > 0): ?>
            <?php $i = 1; ?>
            <?php foreach ($groups as $group): ?>
                <?php $group['currentRow'] = $i; ?>
                <?php echo load_view('groups/group', $group) ?>
                <?php $i++ ?>
                <?php endforeach ?>
            <?php else: ?>
        <tr>
            <td colspan="4">No groups</td>
        </tr>
            <?php endif ?>
        </tbody>
    </table>
</div>