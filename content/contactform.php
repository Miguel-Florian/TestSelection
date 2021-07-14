<form name="" action="" onsubmit="return validateForm()" method="post">
                    <h2 class="h4-color">Formulaire de contact</h4>   
                    <!--<img src="./image/logo.png" alt="iGenius">-->
                <table class="form-style">
                        <tr>
                        <td>
                            <label class="label-color">
                                Votre nom <span class="required">*</span>
                            </label>
                        </td>
                        <td>
                            <input type="text" name="name" class="long"/>
                            <span class="error" id="errorname"></span>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label class="label-color">
                                Votre adresse e-mail <span class="required">*</span>
                            </label>
                        </td>
                        <td>
                            <input type="email" name="email" class="long"/>
                            <span class="error" id="erroremail"></span>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label class="label-color">
                                Message <span class="required">*</span>
                            </label>
                        </td>
                        <td>
                            <textarea name="message" class="long field-textarea"></textarea>
                            <span class="error" id="errormsg"></span>
                        </td>
                        </tr>
                        <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Envoyer">      
                            <input type="reset" value="Réinitialiser"> 
                        </td>
                        </tr>
                    </table>
                </form>