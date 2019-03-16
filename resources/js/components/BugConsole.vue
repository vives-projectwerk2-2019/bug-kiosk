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
          <tbody>
            <tr v-for="log in logs" v-bind:key="log.time">
              <td>{{ log.time }}</td>
              <td>{{ log.dev_id }}</td>
              <td>{{ log.movement }}</td>
              <td>{{ log.action }}</td>

            </tr>
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
      console.log('Bug-Console mounted.')
  },
  data () {
    return {
      newrow:' ',
      logs: []
    }
  },
  mqtt: {
    'TTN' (data) {
      var parsed = JSON.parse(data);
      console.log(data);
      this.logs.unshift({
          time: getTime(),
          dev_id: parsed.dev_id,
          movement:parsed.movement,
          action:parsed.action
        });

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