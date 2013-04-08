<html>
    <!-- ヘッダ -->
    {{include file='c_header.tpl'}}
  
      <!-- メニュータブ -->
        {{include file='c_menu.tpl'}}

    <!-- メニュー -->
    <div id="menu">
      <div id="out_report" class="outline">
        <div class="menu_title">オペレーション履歴画面</div>
        {{if $err_msg != '' }}
        <p class="err_msg"> {{$err_msg}} </p>
        {{/if}}
        <div class="disp_division">
        <form name='search' action="operation_history.php" method="POST">
                    <input type="hidden" name="act" value="">
        </form>
        </div>
        <form name='download' action="operation_history.php" method="POST">
        <table id="operation">
          <tbody>
            <tr>
            </tr>
            {{foreach $op_list as $op_line}}
            <tr>
              <td class="op_id">{{$op_line.op_id}}</td>
              </td>
            </tr>
          {{/foreach}}
          </tbody>
        </table>
        <input type="hidden" name="act" value="">
        <input type="hidden" name="filepath" value="">
      </form>
      </div>
    </div>
  </body>
</html>
