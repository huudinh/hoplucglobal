function animateNumber(finalNumber, duration = 5000, startNumber = 0, callback) {
    let currentNumber = startNumber
    const interval = window.setInterval(updateNumber, 17)
    function updateNumber() {
      if (currentNumber >= finalNumber) {
        clearInterval(interval)
      } else {
        let inc = Math.ceil(finalNumber / (duration / 17))
        if (currentNumber + inc > finalNumber) {
          currentNumber = finalNumber
          clearInterval(interval)
        } else {
          currentNumber += inc
        }
        callback(currentNumber)
      }
    }
  }
  
  document.addEventListener('DOMContentLoaded', function () {
    animateNumber(4000000, 3000, 0, function (number) {
      const formattedNumber = number.toLocaleString()
      document.getElementById('next-count-1').innerText = formattedNumber
    })
    
    animateNumber(98, 3000, 0, function (number) {
      const formattedNumber = number.toLocaleString()
      document.getElementById('next-count-2').innerText = formattedNumber
    })
    
    animateNumber(1500, 3000, 0, function (number) {
      const formattedNumber = number.toLocaleString()
      document.getElementById('next-count-3').innerText = formattedNumber
    })
    animateNumber(15, 3000, 0, function (number) {
      const formattedNumber = number.toLocaleString()
      document.getElementById('next-count-4').innerText = formattedNumber
    })
    animateNumber(600, 3000, 0, function (number) {
      const formattedNumber = number.toLocaleString()
      document.getElementById('next-count-5').innerText = formattedNumber
    })
    animateNumber(50, 3000, 0, function (number) {
      const formattedNumber = number.toLocaleString()
      document.getElementById('next-count-6').innerText = formattedNumber
    })
  })