<template>
  <div class="console">
    <h1>{{ msg }}</h1>
    <div class="container">
      <div class="card">
        <table>
          <thead>
            <tr>
              <th>Time</th>
              <th>Device ID</th>
              <th>Movement</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody v-html="newrow">
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'BugConsole',
  props: {
    msg: String
  },
  mounted() {
      console.log('Component mounted.')
  },
  data () {
    return {
      newrow:' '
    }
  },
  mqtt: {
    'TTN' (data) {
      var parsed = JSON.parse(data);
      this.newrow = '<tr>'+'<td>' + getTime() + '</td>' +'<td>' + parsed.dev_id + '</td>'
                    + '<td>' + parsed.movement + '</td>'
                    + '<td>' + parsed.action + '</td>' +'</tr>' + this.newrow
    }
  }
}

function getTime() {
  let time = new Date((Date.now()));
  let hours = time.getUTCHours()+1;
  let minutes = time.getUTCMinutes();
  let seconds = time.getUTCSeconds();
  let milliseconds = time.getUTCMilliseconds();
  return hours + ":" + minutes + ":" + seconds + ":" + milliseconds;
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>

.console {
    margin-top: 100px;
}

tbody {
    display:block;
    height:640px;
    overflow:auto;
}
thead, tbody tr {
    display:table;
    width:100%;
    table-layout:fixed;
}
thead {
    width: calc( 100% - 1em )
}
table {
    width:100%;
}
</style>