const option1 = document.getElementById("option1");
const option2 = document.getElementById("option2");
const input = document.getElementById("input");
const input1 = document.getElementById("input1");

input.disabled = false;
input1.disabled = false;

option1.addEventListener("click", function () {
  input.disabled = false;
  input1.disabled = false;
});

option2.addEventListener("click", function () {
  input.disabled = true;
  input1.disabled = true;
  input.value = "";
  input1.value = "";
});

let TicketPrice = 120;

function seats() {
  const a1 = document.getElementById("a1");
  const a2 = document.getElementById("a2");
  const a3 = document.getElementById("a3");
  const a4 = document.getElementById("a4");
  const a5 = document.getElementById("a5");
  const b1 = document.getElementById("b1");
  const b2 = document.getElementById("b2");
  const b3 = document.getElementById("b3");
  const b4 = document.getElementById("b4");
  const b5 = document.getElementById("b5");
  const c1 = document.getElementById("c1");
  const c2 = document.getElementById("c2");
  const c3 = document.getElementById("c3");
  const c4 = document.getElementById("c4");
  const c5 = document.getElementById("c5");
  const d1 = document.getElementById("d1");
  const d2 = document.getElementById("d2");
  const d3 = document.getElementById("d3");
  const d4 = document.getElementById("d4");
  const d5 = document.getElementById("d5");
  const countField = document.getElementById("number");

  a1.addEventListener("click", function () {
    if (a1.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });

  a2.addEventListener("click", function () {
    if (a2.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });

  a3.addEventListener("click", function () {
    if (a3.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });

  a4.addEventListener("click", function () {
    if (a4.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });

  a5.addEventListener("click", function () {
    if (a5.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });

  b1.addEventListener("click", function () {
    if (b1.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });

  b2.addEventListener("click", function () {
    if (b2.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });

  b3.addEventListener("click", function () {
    if (b3.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });

  b4.addEventListener("click", function () {
    if (b4.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });

  b5.addEventListener("click", function () {
    if (b5.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });

  c1.addEventListener("click", function () {
    if (c1.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });

  c2.addEventListener("click", function () {
    if (c2.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });

  c3.addEventListener("click", function () {
    if (c3.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });

  c4.addEventListener("click", function () {
    if (c4.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });

  c5.addEventListener("click", function () {
    if (c5.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });
  d1.addEventListener("click", function () {
    if (d1.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });

  d2.addEventListener("click", function () {
    if (d2.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });

  d3.addEventListener("click", function () {
    if (d3.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });

  d4.addEventListener("click", function () {
    if (d4.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });

  d5.addEventListener("click", function () {
    if (d5.checked) {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue + 1;
    } else {
      const currentValue = parseInt(countField.value);
      countField.value = currentValue - 1;
    }
    price.value = countField.value * TicketPrice;
  });
}
