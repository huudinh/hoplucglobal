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
// Init Number
let number1 = Number(document.getElementById('next-count-1').innerText.replace(/,/g, ""));
let number2 = Number(document.getElementById('next-count-2').innerText.replace(/,/g, ""));
let number3 = Number(document.getElementById('next-count-3').innerText.replace(/,/g, ""));
let number4 = Number(document.getElementById('next-count-4').innerText.replace(/,/g, ""));
let number5 = Number(document.getElementById('next-count-5').innerText.replace(/,/g, ""));
let number6 = Number(document.getElementById('next-count-6').innerText.replace(/,/g, ""));

// document.addEventListener('DOMContentLoaded', function () {
  animateNumber(number1, 3000, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('next-count-1').innerText = formattedNumber
  })
  
  animateNumber(number2, 3000, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('next-count-2').innerText = formattedNumber
  })
  
  animateNumber(number3, 3000, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('next-count-3').innerText = formattedNumber
  })
  animateNumber(number4, 3000, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('next-count-4').innerText = formattedNumber
  })
  animateNumber(number5, 3000, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('next-count-5').innerText = formattedNumber
  })
  animateNumber(number6, 3000, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('next-count-6').innerText = formattedNumber
  })
// })
