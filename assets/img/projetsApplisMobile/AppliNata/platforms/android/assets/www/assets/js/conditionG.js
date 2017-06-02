//confirm affiche une boîte de dialogue
confirm('Cliquez sur ok pour accepter les mentions légales et pour continuer.');
function RemoveProduct() {
  if (confirm("Poista?")) {
    return true;
  } else {
    return false;
  }
}
