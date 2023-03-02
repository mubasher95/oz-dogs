// $.ajax({
//   url: "http://127.0.0.1:8000/api/dog?date=2023-01-03&stadium=richmond",
//   method: "GET", 
//   success: function(response) {
//   },
//   error: function(xhr, status, error) {
//   }
// });


fetch("output.json")
  .then(function (response) {
    // let data = response.json();
    return response.json();
  })
  .then(function (output) {
    let placeholder = document.querySelector("#dogs-race");
    let out = "";
    let data = "";
    console.log(output);

    for (let race_row of output) {
      console.log(race_row);
      let keys = Object.keys(race_row.date);
      // console.log("data" + keys);

      for (let i = 0; i < keys.length; i++) {
        // console.log(race_row.date[keys[i]]);
        let race_data = race_row.date[keys[i]];
        // console.log(race_data);
        let race_keys = Object.keys(race_data);
        // console.log(race_keys);
        for (let j = 0; j < race_keys.length; j++) {
          let races = race_data[race_keys[j]];
          let races_keys = Object.keys(races);
          // console.log(races);
          out += `
                    <tr>
                        <td>${races.Stadium}</td>
                        <td>${races.Date}</td>
                        <td>${races.Time}</td>
                        <td>${races.Gr}</td>
                        <td>${races.Dist}</td>
                        <td>${races.Winner}</td>
                        <td>${races.WT}</td>
                        <td><a href="#">Watch Video</a> <span class="d-none video-link">${races.Video}</span></td>
                    </tr>
        `;
        }

        //     // let race_data = "";
        //     // let race_data = race_row.date[keys[i]];
      }

      // data = race_row.date.richmond;
    }
    placeholder.innerHTML = out;

    var today = new Date().toISOString().split("T")[0];
    document.getElementById("date-picker").setAttribute("max", today);


    var table = document.getElementById("dogs-race");
    var rows = table.getElementsByTagName("tr");
    for (var i = 0; i < rows.length; i++) {
      var currentRow = table.rows[i];
      var columns = currentRow.getElementsByTagName("td");
      var column = columns[7];
      var createClickHandler = function (row) {
        return function () {
          // console.log('hell')

          var cell = row.getElementsByTagName("td");

          if (cell[0].innerText in output[0]["date"]) {
            let stadName = output[0]["date"][cell[0].innerText];
            for (let x in stadName) {
              let testItem = stadName[x];
              if (
                testItem["Stadium"] == cell[0].innerText &&
                testItem["Date"] == cell[1].innerHTML &&
                testItem["Winner"] == cell[5].innerText
              ) {
                // let participant = testItem.Video;
                // console.log(participant)
                // const mediaTab = document.getElementById("tab2");
                // console.log(mediaTab)
                // const mediaTabTrigger = new bootstrap.Tab(mediaTab);
                // mediaTabTrigger.show();
                // const videoPlayer = document.getElementById("player");
                // const source = document.createElement("source");
                // source.setAttribute("src", participant);
                // videoPlayer.innerHTML = "";
                // videoPlayer.appendChild(source);
                // videoPlayer.play();
                let participant = testItem.Video;
                console.log(participant);

                const mainTab = document.getElementById("Races");
                const mediaTab = document.getElementById("Media");
                const Tabone = document.getElementById("t1");
                const Tabtwo = document.getElementById("t2");

                console.log(mainTab);
                console.log(mediaTab);

                mainTab.classList.remove("active");
                mediaTab.classList.add("active");
                Tabone.classList.remove("active");
                Tabtwo.classList.add("active");
                // mediaTab.classList.remove("active");

                const videoPlayer = document.getElementById("player");
                const source = document.createElement("source");
                source.setAttribute("src", participant);

                videoPlayer.innerHTML = "";
                videoPlayer.appendChild(source);
                videoPlayer.play();
              }
            }
          }
        };
      };
      column.onclick = createClickHandler(currentRow);
    }

    const isMediaTabActive = () => {
      const mediaTab = document.getElementById("Media");
      return mediaTab.classList.contains("active");
    };

    const videoPlayer = document.getElementById("player");

    setInterval(() => {
      if (!isMediaTabActive() && !videoPlayer.paused) {
        videoPlayer.pause();
      }
    });

    $(document).ready(function () {
      var currentDate = new Date();
      $(".disableFuturedate")
        .datepicker({
          format: "dd/mm/yyyy",
          autoclose: true,
          endDate: "currentDate",
          maxDate: currentDate,
        })
        .on("changeDate", function (ev) {
          $(this).datepicker("hide");
        });
      $(".disableFuturedate").keyup(function () {
        if (this.value.match(/[^0-9]/g)) {
          this.value = this.value.replace(/[^0-9^-]/g, "");
        }
      });
    });

    var table = document.getElementById("dogs-race");
    var rows = table.getElementsByTagName("tr");
    for (var i = 0; i < rows.length; i++) {
      var currentRow = table.rows[i];
      var createClickHandler = function (row) {
        return function () {
          let holder = document.querySelector("#participants");
          let outt = "";
          var cell = row.getElementsByTagName("td");

          if (cell[0].innerText in output[0]["date"]) {
            let stadName = output[0]["date"][cell[0].innerText];
            for (let x in stadName) {
              let testItem = stadName[x];
              if (
                testItem["Stadium"] == cell[0].innerText &&
                testItem["Date"] == cell[1].innerHTML &&
                testItem["Winner"] == cell[5].innerText
              ) {
                // console.log(testItem.Participants_info);
                let participant = testItem.Participants_info;
                for (let z in participant) {
                  let par = participant[z];
                  console.log(par);
                  outt += `
                                      <tr>
                                          <td>${par.Fin}</td>
                                          <td>${par.Dogname}</td>
                                          <td>${par.T}</td>
                                          <td>${par.SP}</td>
                                          <td>${par.TIME}</td>
                                          <td>${par.Btn}</td>
                                          <td>${par["1ST SEC"]}</td>
                                          <td>${par["2ND SEC"]}</td>
                                          <td>${par.Heat}</td>
                                          <td>${par.Status}</td>
                                      </tr>
                          `;
                }
              }
            }
          }
          holder.innerHTML = outt;
        };
      };
      currentRow.onclick = createClickHandler(currentRow);
    }
  });
