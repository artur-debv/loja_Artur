* {
  font-family: "Montserrat", sans-serif;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  color: #333;
}

html,
body {
  height: auto;
  min-height: 100vh;
}


.cEZwImdd{
    display: flex;
    justify-content: center;
    flex-direction: column;
    gap: 20px;
    background-color: rgb(38, 38, 38);
    padding: 0px 15px;
    color: white;
    height: 284px;
}

.buhlSAdd{
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  padding: 5px;
  width: 250px;
  height: 200px;
  margin-top: 9px;
}



input:focus {
  outline: none;
}

#register-container {
  max-width: 900px;
  min-height: 80vh;
  margin: 2rem auto;
  display: flex;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px,
    rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    margin-top: 54px;
    margin-bottom: 54px;
}

#register-banner {
  background: url("../img/bg-form.jpg");
  background-size: cover;
  background-position: center;
  width: 50%;
}

#banner-layer {
  background-color: rgba(25, 11, 122, 0.7);
  height: 100%;
  padding: 2rem;
  display: flex;
  align-items: center;
}

#register-banner h1 {
  font-size: 4rem;
  margin-bottom: 1.5rem;
  color: #fff;
  word-spacing: 50rem;
}

#register-form {
  background-color: #fdfdfd;
  padding: 2rem;
  width: 50%;
  display: flex;
  flex-direction: column;
}

#register-form h2 {
  text-align: center;
  margin-bottom: 1rem;
  font-size: 2.2rem;
}

#register-form p {
  text-align: center;
  margin-bottom: 1.5rem;
  color: #aaa;
  font-size: 14px;
  gap: 8px;
  display: flex;
}

.form-control {
  margin-bottom: 1rem;
  display: flex;
  flex-direction: column;
}

.form-control label {
  font-weight: bold;
  margin-bottom: 0.6rem;

}

.form-control input {
  border: none;
  border-bottom: 1px solid #aaa;
  padding: 0.6rem 0;
}

#open-generate-password {
  font-weight: bold;
  cursor: pointer;
  transition: 0.4s;
  color: black;
}

#open-generate-password:hover {
  color: #0099ff;
}

#register-form #generated-password {
  border: 1px solid #0099ff;
  border-radius: 4px;
  font-weight: bold;
  font-size: 1.2rem;
  padding: 0.4rem;
  color: #333;
  text-align: center;
  margin-bottom: 1rem;
  display: none;
}

#register-form #generated-password p {
  color: #81d340;
  margin-bottom: 0.5rem;
}

#register-form input[type="submit"],
#generate-options button,
#copy-password {
  background-color: #81d340;
  color: #fff;
  opacity: 0.8;
  border: none;
  border-radius: 2rem;
  padding: 1rem 1.4rem;
  max-width: 150px;
  cursor: pointer;
  transition: 0.4s;
  margin: 0 auto;
  width: 220px;
}


/* Segunda versão */
#generate-options {
  margin-bottom: 1rem;
  padding: 1rem;
  border: 1px solid #ddd;
}

#generate-options .form-control {
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}

#generate-options label {
  font-size: 0.8rem;
}

#generate-options input[type="text"] {
  max-width: 30px;
  text-align: center;
  border: 1px solid #ccc;
}

#generate-options button {
  background-color: #0097ff;
  display: block;
  margin: 0 auto;
}

#copy-password {
  margin: 1rem auto;
  background-color: transparent;
  border: 2px solid #81d340;
  color: #81d340;
  padding: 0.5rem 1rem;
}

.hide {
  display: none;
}
