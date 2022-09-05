<section id="clock" class="flex flex-col items-center">
  <p class="uppercase text-pros90blue text-base font-bold">Hora certa</p>
  <div class="clock text-pros90blue uppercase">
      <div class="hours text-pros90blue">
          <div class="first">
              <div class="number">0</div>
          </div>
          <div class="second">
              <div class="number">0</div>
          </div>
      </div>
      <div class="tick text-pros90blue">:</div>
      <div class="minutes text-pros90blue">
          <div class="first">
              <div class="number">0</div>
          </div>
          <div class="second">
              <div class="number">0</div>
          </div>
      </div>
      {{-- <div class="tick">:</div>
      <div class="seconds">
          <div class="first">
              <div class="number">0</div>
          </div>
          <div class="second infinite">
              <div class="number">0</div>
          </div>
      </div> --}}
  </div>
</section>

<style>
  section#clock {
    margin-top: 3rem;
    }
    .clock {
        height: 20vh;
        color: black;
        /* font-size: 22vh; */
        font-size: 4vh;
        font-family: sans-serif;
        line-height: 7.4vh;
        display: flex;
        position: relative;
        /*background: green;*/
        overflow: hidden;
    }

    .clock::before,
    /* .clock::after {
        content: '';
        width: 7ch;
        height: 3vh;
        background: linear-gradient(to top, transparent, black);
        position: absolute;
        z-index: 2;
    } */

    .clock::after {
        bottom: 0;
        background: linear-gradient(to bottom, transparent, black);
    }

    .clock>div {
        display: flex;
    }

    .tick {
        line-height: 7.4vh;
    }

    .tick-hidden {
        opacity: 0;
    }

    .move {
        animation: move linear 1s infinite;
    }

    @keyframes move {
        from {
            transform: translateY(0vh);
        }

        to {
            transform: translateY(-20vh);
        }
    }
</style>

<script>
    var hoursContainer = document.querySelector('.hours')
var minutesContainer = document.querySelector('.minutes')
var secondsContainer = document.querySelector('.seconds')
var tickElements = Array.from(document.querySelectorAll('.tick'))

var last = new Date(0)
last.setUTCHours(-1)

var tickState = true

function updateTime () {
  var now = new Date
  
  var lastHours = last.getHours().toString()
  var nowHours = now.getHours().toString()
  if (lastHours !== nowHours) {
    updateContainer(hoursContainer, nowHours)
  }
  
  var lastMinutes = last.getMinutes().toString()
  var nowMinutes = now.getMinutes().toString()
  if (lastMinutes !== nowMinutes) {
    updateContainer(minutesContainer, nowMinutes)
  }
  
  var lastSeconds = last.getSeconds().toString()
  var nowSeconds = now.getSeconds().toString()
  if (lastSeconds !== nowSeconds) {
    //tick()
    updateContainer(secondsContainer, nowSeconds)
  }
  
  last = now
}

function tick () {
  tickElements.forEach(t => t.classList.toggle('tick-hidden'))
}

function updateContainer (container, newTime) {
  var time = newTime.split('')
  
  if (time.length === 1) {
    time.unshift('0')
  }
  
  
  var first = container.firstElementChild
  if (first.lastElementChild.textContent !== time[0]) {
    updateNumber(first, time[0])
  }
  
  var last = container.lastElementChild
  if (last.lastElementChild.textContent !== time[1]) {
    updateNumber(last, time[1])
  }
}

function updateNumber (element, number) {
  //element.lastElementChild.textContent = number
  var second = element.lastElementChild.cloneNode(true)
  second.textContent = number
  
  element.appendChild(second)
  element.classList.add('move')

  setTimeout(function () {
    element.classList.remove('move')
  }, 990)
  setTimeout(function () {
    element.removeChild(element.firstElementChild)
  }, 990)
}

setInterval(updateTime, 100)
</script>