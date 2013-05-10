<form method="post" action="" id="download_form">
    <table class="checkbox table">
        <tr>
            <th colspan="4">User Options - <button class="btn selectAll" rel="userOptions">Select All</button> <button class="btn deselectAll" rel="userOptions">Deselect All</button>

        </tr>
        <tr>
            <td><input class="checkbox checkbox userOptions" id="username" type="checkbox" value="username" name="options[username]" <?php echo !empty( $_REQUEST['options']['username'] ) ? "checked=\"checked\"" : "" ?> /> <label for="username">Username</label></td>
            <td><input class="checkbox checkbox userOptions" id="userId" type="checkbox" value="id" name="options[id]" <?php echo !empty( $_REQUEST['options']['id'] ) ? "checked=\"checked\"" : "" ?>/> <label for="userId">User ID</label></td>
            <td><input class="checkbox checkbox userOptions" id="email" type="checkbox" value="email" name="options[email]" <?php echo !empty( $_REQUEST['options']['email'] ) ? "checked=\"checked\"" : "" ?>/> <label for="email">Email</label></td>
            <td><input class="checkbox checkbox userOptions" id="age" type="checkbox" value="age" name="options[age]" <?php echo !empty( $_REQUEST['options']['age'] ) ? "checked=\"checked\"" : "" ?>/> <label for="age">Age</label></td>

        </tr>
        
        <tr>
<!--            <td><input class="checkbox checkbox userOptions" id="newsletter" type="checkbox" value="newsletter" name="options[newsletter]" --><?php //echo !empty( $_REQUEST['options']['newsletter'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="newsletter">Newsletter Status</label></td>-->
            <td><input class="checkbox checkbox userOptions" id="grade" type="checkbox" value="grade" name="options[grade]" <?php echo !empty( $_REQUEST['options']['grade'] ) ? "checked=\"checked\"" : "" ?>/> <label for="grade">Grade</label></td>
            <td><input class="checkbox checkbox userOptions" id="gender" type="checkbox" value="gender" name="options[gender]" <?php echo !empty( $_REQUEST['options']['gender'] ) ? "checked=\"checked\"" : "" ?> /> <label for="gender">Gender</label></td>
            <td><input class="checkbox checkbox userOptions" id="codenamep" type="checkbox" value="codenamep" name="options[codenamep]" <?php echo !empty( $_REQUEST['options']['codenamep'] ) ? "checked=\"checked\"" : "" ?>/> <label for="codenamep">Codename: plaintext</label></td>
            <td><input class="checkbox checkbox userOptions" id="codenamec" type="checkbox" value="codenamec" name="options[codenamec]" <?php echo !empty( $_REQUEST['options']['codenamec'] ) ? "checked=\"checked\"" : "" ?>/> <label for="codenamec">Codename: ciphertext</label></td>

        </tr>
        
        <tr>
            <td><input class="checkbox checkbox userOptions" id="codenamecipher" type="checkbox" value="codenamecipher" name="options[codenamecipher]" <?php echo !empty( $_REQUEST['options']['codenamecipher'] ) ? "checked=\"checked\"" : "" ?>/> <label for="codenamecipher">Codename: cipher &amp; keys</label></td>
            <td><input class="checkbox checkbox userOptions" id="registered" type="checkbox" value="registered" name="options[registered]" <?php echo !empty( $_REQUEST['options']['registered'] ) ? "checked=\"checked\"" : "" ?>/> <label for="registered">Date Registered</label></td>
<!--            <td><input class="checkbox checkbox userOptions" id="lastVisit" type="checkbox" value="lastVisit" name="options[lastVisit]" --><?php //echo !empty( $_REQUEST['options']['lastVisit'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="lastVisit">Last Visit</label></td>-->
            <td><input class="checkbox checkbox userOptions" id="numVisits" type="checkbox" value="numVisits" name="options[numVisits]" <?php echo !empty( $_REQUEST['options']['numVisits'] ) ? "checked=\"checked\"" : "" ?>/> <label for="numVisits">Number of Visits Status</label></td>
            <td><input class="checkbox checkbox userOptions" id="session" type="checkbox" value="session" name="options[session]" <?php echo !empty( $_REQUEST['options']['session'] ) ? "checked=\"checked\"" : "" ?>/> <label for="session">Session Login</label></td>
        </tr>
        
        <tr>
            <td><input class="checkbox checkbox userOptions" id="duration" type="checkbox" value="duration" name="options[duration]" <?php echo !empty( $_REQUEST['options']['duration'] ) ? "checked=\"checked\"" : "" ?>/> <label for="duration">Duration (mins)</label></td>
            <!--            <td><input class="checkbox checkbox userOptions" id="start" type="checkbox" value="start" name="options[start]" --><?php //echo !empty( $_REQUEST['options']['start'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="start">Start time of each visit</label></td>-->
            <td><input class="checkbox checkbox userOptions" id="totalPoints" type="checkbox" value="start" name="options[totalPoints]" <?php echo !empty( $_REQUEST['options']['totalPoints'] ) ? "checked=\"checked\"" : "" ?>/> <label for="start">Start time of each visit</label></td>
            <td></td>
            <td></td>
<!--            <td><input class="checkbox checkbox userOptions" id="numEncryptions" type="checkbox" value="numEncryptions" name="options[numEncryptions]" --><?php //echo !empty( $_REQUEST['options']['numEncryptions'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="numEncryptions">Number of completed encryptions per cipher tool</label></td>-->
<!--            <td><input class="checkbox checkbox userOptions" id="numDecryptions" type="checkbox" value="numDecryptions" name="options[numDecryptions]" --><?php //echo !empty( $_REQUEST['options']['numDecryptions'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="numDecryptions">Number of completed decryptions per cipher tool</label></td>-->
        </tr>

        <tr>
            <th colspan="4">Message Board - <button class="btn selectAll" rel="messageBoards">Select All</button> <button class="btn deselectAll" rel="messageBoards">Deselect All</button></th>
        </tr>

        <tr>
            <td><input class="checkbox checkbox messageBoards" id="caesarEasy" type="checkbox" value="caesarEasy" name="options[caesarEasy]" <?php echo !empty( $_REQUEST['options']['caesarEasy'] ) ? "checked=\"checked\"" : "" ?>/> <label for="caesarEasy">Caesar Easy: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messageBoards" id="caesarMedium" type="checkbox" value="caesarMedium" name="options[caesarMedium]" <?php echo !empty( $_REQUEST['options']['caesarMedium'] ) ? "checked=\"checked\"" : "" ?>/> <label for="caesarMedium">Caesar Medium: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messageBoards" id="caesarHard" type="checkbox" value="caesarHard" name="options[caesarHard]" <?php echo !empty( $_REQUEST['options']['caesarHard'] ) ? "checked=\"checked\"" : "" ?>/> <label for="caesarHard">Caesar Hard: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messageBoards" id="caesarExpert" type="checkbox" value="caesarExpert" name="options[caesarExpert]" <?php echo !empty( $_REQUEST['options']['caesarExpert'] ) ? "checked=\"checked\"" : "" ?>/> <label for="caesarExpert">Caesar Export: Number of Messages Cracked</label></td>
        </tr>
        <tr>
            <td><input class="checkbox checkbox messageBoards" id="caesarInsane" type="checkbox" value="caesarInsane" name="options[caesarInsane]" <?php echo !empty( $_REQUEST['options']['caesarInsane'] ) ? "checked=\"checked\"" : "" ?>/> <label for="caesarInsane">Caesar Insane: Number of Messages Cracked</label></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr><td colspan="4"></td></tr>
        <tr>
            <td><input class="checkbox checkbox messageBoards" id="keywordEasy" type="checkbox" value="keywordEasy" name="options[keywordEasy]" <?php echo !empty( $_REQUEST['options']['keywordEasy'] ) ? "checked=\"checked\"" : "" ?>/> <label for="keywordEasy">Keyword Easy: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messageBoards" id="keywordMedium" type="checkbox" value="keywordMedium" name="options[keywordMedium]" <?php echo !empty( $_REQUEST['options']['keywordMedium'] ) ? "checked=\"checked\"" : "" ?>/> <label for="keywordMedium">Keyword Medium: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messageBoards" id="keywordHard" type="checkbox" value="keywordHard" name="options[keywordHard]" <?php echo !empty( $_REQUEST['options']['keywordHard'] ) ? "checked=\"checked\"" : "" ?>/> <label for="keywordHard">Keyword Hard: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messageBoards" id="keywordExpert" type="checkbox" value="keywordExpert" name="options[keywordExpert]" <?php echo !empty( $_REQUEST['options']['keywordExpert'] ) ? "checked=\"checked\"" : "" ?>/> <label for="keywordExpert">Keyword Expert: Number of Messages Cracked</label></td>
        </tr>
        <tr>
            <td><input class="checkbox checkbox messageBoards" id="keywordInsane" type="checkbox" value="keywordInsane" name="options[keywordInsane]" <?php echo !empty( $_REQUEST['options']['keywordInsane'] ) ? "checked=\"checked\"" : "" ?>/> <label for="keywordInsane">Keyword Insane: Number of Messages Cracked</label></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr><td colspan="4"></td></tr>
        <tr>
            <td><input class="checkbox checkbox messageBoards" id="additiveEasy" type="checkbox" value="additiveEasy" name="options[additiveEasy]" <?php echo !empty( $_REQUEST['options']['additiveEasy'] ) ? "checked=\"checked\"" : "" ?>/> <label for="additiveEasy">Additive Easy: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messageBoards" id="additiveMedium" type="checkbox" value="additiveMedium" name="options[additiveMedium]" <?php echo !empty( $_REQUEST['options']['additiveMedium'] ) ? "checked=\"checked\"" : "" ?>/> <label for="additiveMedium">Additive Medium: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messageBoards" id="additiveHard" type="checkbox" value="additiveHard" name="options[additiveHard]" <?php echo !empty( $_REQUEST['options']['additiveHard'] ) ? "checked=\"checked\"" : "" ?>/> <label for="additiveHard">Additive Hard: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messageBoards" id="additiveExpert" type="checkbox" value="additiveExpert" name="options[additiveExpert]" <?php echo !empty( $_REQUEST['options']['additiveExpert'] ) ? "checked=\"checked\"" : "" ?>/> <label for="additiveExpert">Additive Expert: Number of Messages Cracked</label></td>
        </tr>
        <tr>
            <td><input class="checkbox checkbox messageBoards" id="additiveInsane" type="checkbox" value="additiveInsane" name="options[additiveInsane]" <?php echo !empty( $_REQUEST['options']['additiveInsane'] ) ? "checked=\"checked\"" : "" ?>/> <label for="additiveInsane">Additive Insane: Number of Messages Cracked</label></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr><td colspan="4"></td></tr>
        <tr>
            <td><input class="checkbox checkbox messageBoards" id="multiplicativeEasy" type="checkbox" value="multiplicativeEasy" name="options[multiplicativeEasy]" <?php echo !empty( $_REQUEST['options']['multiplicativeEasy'] ) ? "checked=\"checked\"" : "" ?>/> <label for="multiplicativeEasy">Multiplicative Easy: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messageBoards" id="multiplicativeMedium" type="checkbox" value="multiplicativeMedium" name="options[multiplicativeMedium]" <?php echo !empty( $_REQUEST['options']['multiplicativeMedium'] ) ? "checked=\"checked\"" : "" ?>/> <label for="multiplicativeMedium">Multiplicative Medium: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messageBoards" id="multiplicativeHard" type="checkbox" value="multiplicativeHard" name="options[multiplicativeHard]" <?php echo !empty( $_REQUEST['options']['multiplicativeHard'] ) ? "checked=\"checked\"" : "" ?>/> <label for="multiplicativeHard">Multiplicative Hard: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messageBoards" id="multiplicativeExpert" type="checkbox" value="multiplicativeExpert" name="options[multiplicativeExpert]" <?php echo !empty( $_REQUEST['options']['multiplicativeExpert'] ) ? "checked=\"checked\"" : "" ?>/> <label for="multiplicativeExpert">Multiplicative Expert: Number of Messages Cracked</label></td>
        </tr>
        <tr>
            <td><input class="checkbox checkbox messageBoards" id="multiplicativeInsane" type="checkbox" value="multiplicativeInsane" name="options[multiplicativeInsane]" <?php echo !empty( $_REQUEST['options']['multiplicativeInsane'] ) ? "checked=\"checked\"" : "" ?>/> <label for="multiplicativeInsane">Multiplicative Insane: Number of Messages Cracked</label></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr><td colspan="4"></td></tr>
        <tr>
            <td><input class="checkbox checkbox messageBoards" id="affineEasy" type="checkbox" value="affineEasy" name="options[affineEasy]" <?php echo !empty( $_REQUEST['options']['affineEasy'] ) ? "checked=\"checked\"" : "" ?>/> <label for="affineEasy">Affine Easy: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messageBoards" id="affineMedium" type="checkbox" value="affineMedium" name="options[affineMedium]" <?php echo !empty( $_REQUEST['options']['affineMedium'] ) ? "checked=\"checked\"" : "" ?>/> <label for="affineMedium">Affine Medium: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messageBoards" id="affineHard" type="checkbox" value="affineHard" name="options[affineHard]" <?php echo !empty( $_REQUEST['options']['affineHard'] ) ? "checked=\"checked\"" : "" ?>/> <label for="affineHard">Affine Hard: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messageBoards" id="affineExpert" type="checkbox" value="affineExpert" name="options[affineExpert]" <?php echo !empty( $_REQUEST['options']['affineExpert'] ) ? "checked=\"checked\"" : "" ?>/> <label for="affineExpert">Affine Expert: Number of Messages Cracked</label></td>
        </tr>
        <tr>
            <td><input class="checkbox checkbox messageBoards" id="affineInsane" type="checkbox" value="affineInsane" name="options[affineInsane]" <?php echo !empty( $_REQUEST['options']['affineInsane'] ) ? "checked=\"checked\"" : "" ?>/> <label for="affineInsane">Affine Insane: Number of Messages Cracked</label></td>
        </tr>
        <tr><td colspan="4"></td></tr>
        <tr>
            <td><input class="checkbox checkbox messageBoards" id="vigenereEasy" type="checkbox" value="vigenereEasy" name="options[vigenereEasy]" <?php echo !empty( $_REQUEST['options']['vigenereEasy'] ) ? "checked=\"checked\"" : "" ?>/> <label for="vigenereEasy">Vigenere Easy: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messageBoards" id="vigenereMedium" type="checkbox" value="vigenereMedium" name="options[vigenereMedium]" <?php echo !empty( $_REQUEST['options']['vigenereMedium'] ) ? "checked=\"checked\"" : "" ?>/> <label for="vigenereMedium">Vigenere Medium: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messageBoards" id="vigenereHard" type="checkbox" value="vigenereHard" name="options[vigenereHard]" <?php echo !empty( $_REQUEST['options']['vigenereHard'] ) ? "checked=\"checked\"" : "" ?>/> <label for="vigenereHard">Vigenere Hard: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messageBoards" id="vigenereExpert" type="checkbox" value="vigenereExpert" name="options[vigenereExpert]" <?php echo !empty( $_REQUEST['options']['vigenereExpert'] ) ? "checked=\"checked\"" : "" ?>/> <label for="vigenereExpert">Vigenere Expert: Number of Messages Cracked</label></td>
        </tr>
        <tr>
            <td><input class="checkbox checkbox messageBoards" id="vigenereInsane" type="checkbox" value="vigenereInsane" name="options[vigenereInsane]" <?php echo !empty( $_REQUEST['options']['vigenereInsane'] ) ? "checked=\"checked\"" : "" ?>/> <label for="vigenereInsane">Vigenere Insane: Number of Messages Cracked</label></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th colspan="4">Joke Board - <button class="btn selectAll" rel="jokeBoards">Select All</button> <button class="btn deselectAll" rel="jokeBoards">Deselect All</button></th>
        </tr>

        <tr>
            <td><input class="checkbox checkbox jokeBoards" id="caesarJoke" type="checkbox" value="caesarJoke" name="options[caesarJoke]" <?php echo !empty( $_REQUEST['options']['caesarJoke'] ) ? "checked=\"checked\"" : "" ?>/> <label for="caesarJoke">Caesar:Jokes decrypted.</label></td>
            <td><input class="checkbox checkbox jokeBoards" id="keywordJoke" type="checkbox" value="keywordJoke" name="options[keywordJoke]" <?php echo !empty( $_REQUEST['options']['keywordJoke'] ) ? "checked=\"checked\"" : "" ?>/> <label for="keywordJoke">Keyword: Jokes decrypted</label></td>
            <td><input class="checkbox checkbox jokeBoards" id="additiveJoke" type="checkbox" value="additiveJoke" name="options[additiveJoke]" <?php echo !empty( $_REQUEST['options']['additiveJoke'] ) ? "checked=\"checked\"" : "" ?>/> <label for="additiveJoke">Additive: Jokes decrypted</label></td>
            <td><input class="checkbox checkbox jokeBoards" id="multiplicativeJoke" type="checkbox" value="multiplicativeJoke" name="options[multiplicativeJoke]" <?php echo !empty( $_REQUEST['options']['multiplicativeJoke'] ) ? "checked=\"checked\"" : "" ?>/> <label for="multiplicativeJoke">Multiplicative: Jokes decrypted</label></td>
        </tr>
        <tr>
            <td><input class="checkbox checkbox jokeBoards" id="affineJoke" type="checkbox" value="affineJoke" name="options[affineJoke]" <?php echo !empty( $_REQUEST['options']['affineJoke'] ) ? "checked=\"checked\"" : "" ?>/> <label for="affineJoke">Affine: Jokes decrypted</label></td>
            <td><input class="checkbox checkbox jokeBoards" id="vigenereJoke" type="checkbox" value="vigenereJoke" name="options[vigenereJoke]" <?php echo !empty( $_REQUEST['options']['vigenereJoke'] ) ? "checked=\"checked\"" : "" ?>/> <label for="vigenereJoke">Vigenere: Jokes decrypted</label></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <th colspan="4">Private Group Message Board - <button class="btn selectAll" rel="messagePrivateBoards">Select All</button> <button class="btn deselectAll" rel="messagePrivateBoards">Deselect All</button></th>
        </tr>

        <tr>
            <td><input class="checkbox checkbox messagePrivateBoards" id="caesarPrivateEasy" type="checkbox" value="caesarPrivateEasy" name="options[caesarPrivateEasy]" <?php echo !empty( $_REQUEST['options']['caesarPrivateEasy'] ) ? "checked=\"checked\"" : "" ?>/> <label for="caesarPrivateEasy">Caesar Easy: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messagePrivateBoards" id="caesarPrivateMedium" type="checkbox" value="caesarPrivateMedium" name="options[caesarPrivateMedium]" <?php echo !empty( $_REQUEST['options']['caesarPrivateMedium'] ) ? "checked=\"checked\"" : "" ?>/> <label for="caesarPrivateMedium">Caesar Medium: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messagePrivateBoards" id="caesarPrivateHard" type="checkbox" value="caesarPrivateHard" name="options[caesarPrivateHard]" <?php echo !empty( $_REQUEST['options']['caesarPrivateHard'] ) ? "checked=\"checked\"" : "" ?>/> <label for="caesarPrivateHard">Caesar Hard: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messagePrivateBoards" id="caesarPrivateExpert" type="checkbox" value="caesarPrivateExpert" name="options[caesarPrivateExpert]" <?php echo !empty( $_REQUEST['options']['caesarPrivateExpert'] ) ? "checked=\"checked\"" : "" ?>/> <label for="caesarPrivateExpert">Caesar Export: Number of Messages Cracked</label></td>
        </tr>
        <tr>
            <td><input class="checkbox checkbox messagePrivateBoards" id="caesarPrivateInsane" type="checkbox" value="caesarPrivateInsane" name="options[caesarPrivateInsane]" <?php echo !empty( $_REQUEST['options']['caesarPrivateInsane'] ) ? "checked=\"checked\"" : "" ?>/> <label for="caesarPrivateInsane">Caesar Insane: Number of Messages Cracked</label></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr><td colspan="4"></td></tr>
        <tr>
            <td><input class="checkbox checkbox messagePrivateBoards" id="keywordPrivateEasy" type="checkbox" value="keywordPrivateEasy" name="options[keywordPrivateEasy]" <?php echo !empty( $_REQUEST['options']['keywordPrivateEasy'] ) ? "checked=\"checked\"" : "" ?>/> <label for="keywordPrivateEasy">Keyword Easy: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messagePrivateBoards" id="keywordPrivateMedium" type="checkbox" value="keywordPrivateMedium" name="options[keywordPrivateMedium]" <?php echo !empty( $_REQUEST['options']['keywordPrivateMedium'] ) ? "checked=\"checked\"" : "" ?>/> <label for="keywordPrivateMedium">Keyword Medium: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messagePrivateBoards" id="keywordPrivateHard" type="checkbox" value="keywordPrivateHard" name="options[keywordPrivateHard]" <?php echo !empty( $_REQUEST['options']['keywordPrivateHard'] ) ? "checked=\"checked\"" : "" ?>/> <label for="keywordPrivateHard">Keyword Hard: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messagePrivateBoards" id="keywordPrivateExpert" type="checkbox" value="keywordPrivateExpert" name="options[keywordPrivateExpert]" <?php echo !empty( $_REQUEST['options']['keywordPrivateExpert'] ) ? "checked=\"checked\"" : "" ?>/> <label for="keywordPrivateExpert">Keyword Expert: Number of Messages Cracked</label></td>
        </tr>
        <tr>
            <td><input class="checkbox checkbox messagePrivateBoards" id="keywordPrivateInsane" type="checkbox" value="keywordPrivateInsane" name="options[keywordPrivateInsane]" <?php echo !empty( $_REQUEST['options']['keywordPrivateInsane'] ) ? "checked=\"checked\"" : "" ?>/> <label for="keywordPrivateInsane">Keyword Insane: Number of Messages Cracked</label></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr><td colspan="4"></td></tr>
        <tr>
            <td><input class="checkbox checkbox messagePrivateBoards" id="additivePrivateEasy" type="checkbox" value="additivePrivateEasy" name="options[additivePrivateEasy]" <?php echo !empty( $_REQUEST['options']['additivePrivateEasy'] ) ? "checked=\"checked\"" : "" ?>/> <label for="additivePrivateEasy">Additive Easy: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messagePrivateBoards" id="additivePrivateMedium" type="checkbox" value="additivePrivateMedium" name="options[additivePrivateMedium]" <?php echo !empty( $_REQUEST['options']['additivePrivateMedium'] ) ? "checked=\"checked\"" : "" ?>/> <label for="additivePrivateMedium">Additive Medium: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messagePrivateBoards" id="additivePrivateHard" type="checkbox" value="additivePrivateHard" name="options[additivePrivateHard]" <?php echo !empty( $_REQUEST['options']['additivePrivateHard'] ) ? "checked=\"checked\"" : "" ?>/> <label for="additivePrivateHard">Additive Hard: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messagePrivateBoards" id="additivePrivateExpert" type="checkbox" value="additivePrivateExpert" name="options[additivePrivateExpert]" <?php echo !empty( $_REQUEST['options']['additivePrivateExpert'] ) ? "checked=\"checked\"" : "" ?>/> <label for="additivePrivateExpert">Additive Expert: Number of Messages Cracked</label></td>
        </tr>
        <tr>
            <td><input class="checkbox checkbox messagePrivateBoards" id="additivePrivateInsane" type="checkbox" value="additivePrivateInsane" name="options[additivePrivateInsane]" <?php echo !empty( $_REQUEST['options']['additivePrivateInsane'] ) ? "checked=\"checked\"" : "" ?>/> <label for="additivePrivateInsane">Additive Insane: Number of Messages Cracked</label></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr><td colspan="4"></td></tr>
        <tr>
            <td><input class="checkbox checkbox messagePrivateBoards" id="multiplicativePrivateEasy" type="checkbox" value="multiplicativePrivateEasy" name="options[multiplicativePrivateEasy]" <?php echo !empty( $_REQUEST['options']['multiplicativePrivateEasy'] ) ? "checked=\"checked\"" : "" ?>/> <label for="multiplicativePrivateEasy">Multiplicative Easy: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messagePrivateBoards" id="multiplicativePrivateMedium" type="checkbox" value="multiplicativePrivateMedium" name="options[multiplicativePrivateMedium]" <?php echo !empty( $_REQUEST['options']['multiplicativePrivateMedium'] ) ? "checked=\"checked\"" : "" ?>/> <label for="multiplicativePrivateMedium">Multiplicative Medium: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messagePrivateBoards" id="multiplicativePrivateHard" type="checkbox" value="multiplicativePrivateHard" name="options[multiplicativePrivateHard]" <?php echo !empty( $_REQUEST['options']['multiplicativePrivateHard'] ) ? "checked=\"checked\"" : "" ?>/> <label for="multiplicativePrivateHard">Multiplicative Hard: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messagePrivateBoards" id="multiplicativePrivateExpert" type="checkbox" value="multiplicativePrivateExpert" name="options[multiplicativePrivateExpert]" <?php echo !empty( $_REQUEST['options']['multiplicativePrivateExpert'] ) ? "checked=\"checked\"" : "" ?>/> <label for="multiplicativePrivateExpert">Multiplicative Expert: Number of Messages Cracked</label></td>
        </tr>
        <tr>
            <td><input class="checkbox checkbox messagePrivateBoards" id="multiplicativePrivateInsane" type="checkbox" value="multiplicativePrivateInsane" name="options[multiplicativePrivateInsane]" <?php echo !empty( $_REQUEST['options']['multiplicativePrivateInsane'] ) ? "checked=\"checked\"" : "" ?>/> <label for="multiplicativePrivateInsane">Multiplicative Insane: Number of Messages Cracked</label></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr><td colspan="4"></td></tr>
        <tr>
            <td><input class="checkbox checkbox messagePrivateBoards" id="affinePrivateEasy" type="checkbox" value="affinePrivateEasy" name="options[affinePrivateEasy]" <?php echo !empty( $_REQUEST['options']['affinePrivateEasy'] ) ? "checked=\"checked\"" : "" ?>/> <label for="affinePrivateEasy">Affine Easy: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messagePrivateBoards" id="affinePrivateMedium" type="checkbox" value="affinePrivateMedium" name="options[affinePrivateMedium]" <?php echo !empty( $_REQUEST['options']['affinePrivateMedium'] ) ? "checked=\"checked\"" : "" ?>/> <label for="affinePrivateMedium">Affine Medium: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messagePrivateBoards" id="affinePrivateHard" type="checkbox" value="affinePrivateHard" name="options[affinePrivateHard]" <?php echo !empty( $_REQUEST['options']['affinePrivateHard'] ) ? "checked=\"checked\"" : "" ?>/> <label for="affinePrivateHard">Affine Hard: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messagePrivateBoards" id="affinePrivateExpert" type="checkbox" value="affinePrivateExpert" name="options[affinePrivateExpert]" <?php echo !empty( $_REQUEST['options']['affinePrivateExpert'] ) ? "checked=\"checked\"" : "" ?>/> <label for="affinePrivateExpert">Affine Expert: Number of Messages Cracked</label></td>
        </tr>
        <tr>
            <td><input class="checkbox checkbox messagePrivateBoards" id="affinePrivateInsane" type="checkbox" value="affinePrivateInsane" name="options[affinePrivateInsane]" <?php echo !empty( $_REQUEST['options']['affinePrivateInsane'] ) ? "checked=\"checked\"" : "" ?>/> <label for="affinePrivateInsane">Affine Insane: Number of Messages Cracked</label></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr><td colspan="4"></td></tr>
        <tr>
            <td><input class="checkbox checkbox messagePrivateBoards" id="vigenerePrivateEasy" type="checkbox" value="vigenerePrivateEasy" name="options[vigenerePrivateEasy]" <?php echo !empty( $_REQUEST['options']['vigenerePrivateEasy'] ) ? "checked=\"checked\"" : "" ?>/> <label for="vigenerePrivateEasy">Vigenere Easy: Number of Messages Cracked</label></td>
            <td><input class="checkbox checkbox messagePrivateBoards" id="vigenerePrivateMedium" type="checkbox" value="vigenerePrivateMedium" name="options[vigenerePrivateMedium]" <?php echo !empty( $_REQUEST['options']['vigenerePrivateMedium'] ) ? "checked=\"checked\"" : "" ?>/> <label for="vigenerePrivateMedium">Vigenere Medium: Number of Messages Cracked</label></td>
            <td><input class="checkbox messagePrivateBoards" id="vigenerePrivateHard" type="checkbox" value="vigenerePrivateHard" name="options[vigenerePrivateHard]" <?php echo !empty( $_REQUEST['options']['vigenerePrivateHard'] ) ? "checked=\"checked\"" : "" ?>/> <label for="vigenerePrivateHard">Vigenere Hard: Number of Messages Cracked</label></td>
            <td><input class="checkbox messagePrivateBoards" id="vigenerePrivateExpert" type="checkbox" value="vigenerePrivateExpert" name="options[vigenerePrivateExpert]" <?php echo !empty( $_REQUEST['options']['vigenerePrivateExpert'] ) ? "checked=\"checked\"" : "" ?>/> <label for="vigenerePrivateExpert">Vigenere Expert: Number of Messages Cracked</label></td>
        </tr>
        <tr>
            <td><input class="checkbox messagePrivateBoards" id="vigenerePrivateInsane" type="checkbox" value="vigenerePrivateInsane" name="options[vigenerePrivateInsane]" <?php echo !empty( $_REQUEST['options']['vigenerePrivateInsane'] ) ? "checked=\"checked\"" : "" ?>/> <label for="vigenerePrivateInsane">Vigenere Insane: Number of Messages Cracked</label></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <th colspan="4">Cipher Tools - <button class="btn selectAll" rel="cipherTools">Select All</button> <button class="btn deselectAll" rel="cipherTools">Deselect All</button></th>
        </tr>
        <tr>
            <td><input class="checkbox cipherTools" id="caesarEncryptTool" type="checkbox" value="caesarEncryptTool" name="options[caesarEncryptTool]" <?php echo !empty( $_REQUEST['options']['caesarEncryptTool'] ) ? "checked=\"checked\"" : "" ?>/> <label for="caesarEncryptTool">Completed Encryptions - Caesar</label></td>
            <td><input class="checkbox cipherTools" id="letterEncryptTool" type="checkbox" value="letterEncryptTool" name="options[letterEncryptTool]" <?php echo !empty( $_REQUEST['options']['letterEncryptTool'] ) ? "checked=\"checked\"" : "" ?>/> <label for="letterEncryptTool">Completed Encryptions - Letter to Number</label></td>
            <td><input class="checkbox cipherTools" id="additiveEncryptTool" type="checkbox" value="additiveEncryptTool" name="options[additiveEncryptTool]" <?php echo !empty( $_REQUEST['options']['additiveEncryptTool'] ) ? "checked=\"checked\"" : "" ?>/> <label for="additiveEncryptTool">Completed Encryptions - Additive</label></td>
            <td><input class="checkbox cipherTools" id="keywordEncryptTool" type="checkbox" value="keywordEncryptTool" name="options[keywordEncryptTool]" <?php echo !empty( $_REQUEST['options']['keywordEncryptTool'] ) ? "checked=\"checked\"" : "" ?>/> <label for="keywordEncryptTool">Completed Encryptions - Keyword</label></td>
        </tr>
        <tr>
            <td><input class="checkbox cipherTools" id="multiplicativeEncryptTool" type="checkbox" value="multiplicativeEncryptTool" name="options[multiplicativeEncryptTool]" <?php echo !empty( $_REQUEST['options']['multiplicativeEncryptTool'] ) ? "checked=\"checked\"" : "" ?>/> <label for="multiplicativeEncryptTool">Completed Encryptions - Multiplicative</label></td>
            <td><input class="checkbox cipherTools" id="affineEncryptTool" type="checkbox" value="affineEncryptTool" name="options[affineEncryptTool]" <?php echo !empty( $_REQUEST['options']['affineEncryptTool'] ) ? "checked=\"checked\"" : "" ?>/> <label for="affineEncryptTool">Completed Encryptions - Affine</label></td>
            <td><input class="checkbox cipherTools" id="vigenereEncryptTool" type="checkbox" value="vigenereEncryptTool" name="options[vigenereEncryptTool]" <?php echo !empty( $_REQUEST['options']['vigenereEncryptTool'] ) ? "checked=\"checked\"" : "" ?>/> <label for="vigenereEncryptTool">Completed Encryptions - Vigenere</label></td>
            <td><input class="checkbox cipherTools" id="substitutionEncryptTool" type="checkbox" value="substitutionEncryptTool" name="options[substitutionEncryptTool]" <?php echo !empty( $_REQUEST['options']['substitutionEncryptTool'] ) ? "checked=\"checked\"" : "" ?>/> <label for="substitutionEncryptTool">Completed Encryptions - Substitution</label></td>
        </tr>
        <tr>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td><input class="checkbox cipherTools" id="caesarDecryptTool" type="checkbox" value="caesarDecryptTool" name="options[caesarDecryptTool]" <?php echo !empty( $_REQUEST['options']['caesarDecryptTool'] ) ? "checked=\"checked\"" : "" ?>/> <label for="caesarDecryptTool">Completed Decryptions - Caesar</label></td>
            <td><input class="checkbox cipherTools" id="letterDecryptTool" type="checkbox" value="letterDecryptTool" name="options[letterDecryptTool]" <?php echo !empty( $_REQUEST['options']['letterDecryptTool'] ) ? "checked=\"checked\"" : "" ?>/> <label for="letterDecryptTool">Completed Decryptions - Letter to Number</label></td>
            <td><input class="checkbox cipherTools" id="additiveDecryptTool" type="checkbox" value="additiveDecryptTool" name="options[additiveDecryptTool]" <?php echo !empty( $_REQUEST['options']['additiveDecryptTool'] ) ? "checked=\"checked\"" : "" ?>/> <label for="additiveDecryptTool">Completed Decryptions - Additive</label></td>
            <td><input class="checkbox cipherTools" id="keywordDecryptTool" type="checkbox" value="keywordDecryptTool" name="options[keywordDecryptTool]" <?php echo !empty( $_REQUEST['options']['keywordDecryptTool'] ) ? "checked=\"checked\"" : "" ?>/> <label for="keywordDecryptTool">Completed Decryptions - Keyword</label></td>
        </tr>
        <tr>
            <td><input class="checkbox cipherTools" id="multiplicativeDecryptTool" type="checkbox" value="multiplicativeDecryptTool" name="options[multiplicativeDecryptTool]" <?php echo !empty( $_REQUEST['options']['multiplicativeDecryptTool'] ) ? "checked=\"checked\"" : "" ?>/> <label for="multiplicativeDecryptTool">Completed Decryptions - Multiplicative</label></td>
            <td><input class="checkbox cipherTools" id="affineDecryptTool" type="checkbox" value="affineDecryptTool" name="options[affineDecryptTool]" <?php echo !empty( $_REQUEST['options']['affineDecryptTool'] ) ? "checked=\"checked\"" : "" ?>/> <label for="affineDecryptTool">Completed Decryptions - Affine</label></td>
            <td><input class="checkbox cipherTools" id="vigenereDecryptTool" type="checkbox" value="vigenereDecryptTool" name="options[vigenereDecryptTool]" <?php echo !empty( $_REQUEST['options']['vigenereDecryptTool'] ) ? "checked=\"checked\"" : "" ?>/> <label for="vigenereDecryptTool">Completed Decryptions - Vigenere</label></td>
            <td><input class="checkbox cipherTools" id="substitutionDecryptTool" type="checkbox" value="substitutionDecryptTool" name="options[substitutionDecryptTool]" <?php echo !empty( $_REQUEST['options']['substitutionDecryptTool'] ) ? "checked=\"checked\"" : "" ?>/> <label for="substitutionDecryptTool">Completed Decryptions - Substitution</label></td>
        </tr>
<!--        <tr>-->
<!--            <th colspan="4">Single Player Game</th>-->
<!--        </tr>-->
<!--        -->
<!--        <tr>-->
<!--            <td><input id="mainEntryTime" type="checkbox" value="mainEntryTime" name="options[mainEntryTime]" --><?php //echo !empty( $_REQUEST['options']['mainEntryTime'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="mainEntryTime">Main Entry Time</label></td>-->
<!--            <td><input id="mainDepartTime" type="checkbox" value="start" name="options[mainDepartTime]" --><?php //echo !empty( $_REQUEST['options']['mainDepartTime'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="mainDepartTime">Main Depart Time</label></td>-->
<!--            <td><input id="missionEntry" type="checkbox" value="missionEntry" name="options[missionEntry]" --><?php //echo !empty( $_REQUEST['options']['missionEntry'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="missionEntry">Mission Entry Date-Time Stamp</label></td>-->
<!--            <td><input id="missionDepart" type="checkbox" value="missionDepart" name="options[missionDepart]" --><?php //echo !empty( $_REQUEST['options']['missionDepart'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="missionDepart">Mission Depart Date-Time Stamp</label></td>-->
<!--            -->
<!--        </tr>-->
<!--        -->
<!--        <tr>-->
<!--            <td><input type="checkbox" value="1" name="options[username]" --><?php //echo !empty( $_REQUEST['options']['newsletter'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="numDecryptions">In-Mission Cryptograms solved (numbered)</label></td>-->
<!--            <td><input type="checkbox" value="1" name="options[username]" --><?php //echo !empty( $_REQUEST['options']['newsletter'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="numDecryptions">Mission Completion</label></td>-->
<!--            <td><input type="checkbox" value="1" name="options[username]" --><?php //echo !empty( $_REQUEST['options']['newsletter'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="numDecryptions">In-Mission Cryptograms solved (numbered)</label></td>-->
<!--            <td><input type="checkbox" value="1" name="options[username]" --><?php //echo !empty( $_REQUEST['options']['newsletter'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="numDecryptions">Mission Completion</label></td>-->
<!--        </tr>-->
<!--        -->
<!--        <tr>-->
<!--            <th colspan="4">Multiplayer Player Game</th>-->
<!--        </tr>-->
<!--        -->
<!--        <tr>-->
<!--            <td><input type="checkbox" value="1" name="options[duration]" --><?php //echo !empty( $_REQUEST['options']['newsletter'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="numDecryptions">Difficulty/Cipher selected</label></td>-->
<!--            <td><input type="checkbox" value="1" name="options[start]" --><?php //echo !empty( $_REQUEST['options']['newsletter'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="numDecryptions">Number of messages from other players decrypted</label></td>-->
<!--            <td><input type="checkbox" value="1" name="options[numEncryptions]" --><?php //echo !empty( $_REQUEST['options']['newsletter'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="numDecryptions">Number of historical plaques cracked</label></td>-->
<!--            <td><input type="checkbox" value="1" name="options[numDecryptions]" --><?php //echo !empty( $_REQUEST['options']['newsletter'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="numDecryptions">Number of café mini-games played</label></td>-->
<!--        </tr>-->
<!--        -->
<!--        <tr>-->
<!--            <td><input type="checkbox" value="1" name="options[username]" --><?php //echo !empty( $_REQUEST['options']['newsletter'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="numDecryptions">Game completed?</label></td>-->
<!--            <td><input type="checkbox" value="1" name="options[username]" --><?php //echo !empty( $_REQUEST['options']['newsletter'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="numDecryptions">Win or not?</label></td>-->
<!--            <td><input type="checkbox" value="1" name="options[duration]" --><?php //echo !empty( $_REQUEST['options']['newsletter'] ) ? "checked=\"checked\"" : "" ?><!--/> <label for="numDecryptions">Number of times played the game</label></td>-->
<!--            <td></td>-->
<!--        </tr>-->
        <tr>
            <td><input type="submit" name="submitForm" value="Download CSV" /></td>
        </tr>
    </table>
    
</form>