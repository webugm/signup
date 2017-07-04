
    <section>
      <div class="container">
        <h1>成績單</h1>
        <table class="table table-hover table-bordered">
          <{foreach $rows as $row}>
            <{if $row@first}>
              <tr>
                <th>序</th>
                <th>姓名</th>
                <th>國文</th> 
                <th>英文</th> 
                <th>社會</th>            
              </tr>
            <{/if}>
            <tr>
              <{assign var=conuter value=$row@index+1}>
              <td><{$conuter}></td>
              <td><{$row.name}></td>
              <td><{$row.chinese}></td>  
              <td><{$row.english}></td>
              <td><{$row.society}></td>          
            </tr>
            <{if $row@last}>
              <tr>
                <th colspan=5>總共有：<{$row@total}>人</th>
              </tr>
            <{/if}>
          <{/foreach}>          
        </table>
      </div>
    </section>