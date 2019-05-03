<template>
  <div class="console">
    <h1>{{ msg }}</h1>
    <div class="container">
      <div class="row">
        <div class="input-field">
          <div class="col s6 m6 l10">
            <select name="status" id="tags" class="browser-default" v-on:change="setID($event)">
              <option
                v-bind:key="device_option.option"
                v-for="device_option in device_options"
                :value="device_option"
              >{{ device_option }}</option>
            </select>
          </div>
          <div class="col s6 m6 l2">
            <a class="waves-effect waves-light btn clear_button" v-on:click="clear">
              <i class="material-icons left">clear</i>
              Clear
            </a>            
          </div>
        </div>
      </div>
      <div class="card responsive-table">
        <table>
          <thead>
            <tr>
              <th class="hide-on-small-only">Time</th>
              <th>Device ID</th>
              <th>Movement</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="log in filtered" v-bind:key="log.time">
              <td class="hide-on-small-only">{{ log.time }}</td>
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
  name: "BugConsole",
  props: {
    msg: String
  },
  mounted() {
    console.log("Bug-Console mounted.");
  },
  data() {
    return {
      newrow: " ",
      logs: [],
      device_options: ["All"],
      filterID: "All",
      filtered: []
    };
  },
  mqtt: {
    logger(data) {
      var parsed = JSON.parse(data);
      if (this.device_options.indexOf(parsed.dev_id) === -1) {
        this.device_options.push(parsed.dev_id);
      }

      this.logs.unshift({
        time: getTime(),
        dev_id: parsed.dev_id,
        movement: parsed.movement,
        action: parsed.action
      });
      if (this.filterID === "All") {
        this.setAll();
      } else {
        this.filtered = this.logs.filter(this.filterByID);
      }
    }
  },
  methods: {
    clear: function(event) {
      this.logs = [];
      this.device_options = ["All"];
      this.filtered = [];
    },
    setID(e) {
      let value = e.target.value;
      this.filterID = value;
      console.log(this.filterID);
      if (this.filterID === "All") {
        this.setAll();
      } else {
        this.filtered = this.logs.filter(this.filterByID);
      }
    },
    setAll() {
      this.filtered = this.logs;
    },
    filterByID(obj) {
      return this.filterID === obj.dev_id;
    }
  }
};

function getTime() {
  let time = new Date(Date.now());
  let hours = time.getUTCHours() + 2;
  let minutes = time.getUTCMinutes();
  let seconds = time.getUTCSeconds();
  let milliseconds = time.getUTCMilliseconds();
  return hours + ":" + minutes + ":" + seconds + ":" + milliseconds;
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
.clear_button{
  background-color: #00cc99;
  margin: 0%;
}

tbody {
  display: block;
  height: 640px;
  overflow: auto;
}
thead,
tbody tr {
  display: table;
  width: 100%;
  table-layout: fixed;
}
thead {
  width: calc(100% - 1em);
}
table {
  width: 100%;
}
</style>