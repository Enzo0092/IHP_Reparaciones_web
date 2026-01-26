from flask import Flask, render_template

app = Flask(__name__)

@app.route("/")
def home():
    return render_template("index.html")

@app.route("/celulares")
def celulares():
    return render_template("celulares.html")

@app.route("/consolas")
def consolas():
    return render_template("consolas.html")

@app.route("/pcs")
def pcs():
    return render_template("pcs.html")
    

if __name__ == "__main__":
    app.run(debug=True)
