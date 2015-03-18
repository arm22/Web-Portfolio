import java.util.Arrays;
import java.util.HashSet;
import java.util.Set;


public class Board {
	
	public int[][] grid;	//TODO change to private
	
	public Board(int size) {
		if(!isPerfectSquare(size)) {
			throw new IllegalArgumentException("Size must be a perfect square");
		}
		grid = new int[size][size];
		for(int i = 0; i < grid.length; i++) {
			Arrays.fill(grid[i], -1);
		}
	}
	
	private boolean isPerfectSquare(int num) {
		return Math.sqrt(num)*Math.sqrt(num) == num;
	}
	
	public void add(int x, int y, int value) {
		if(value < 0 || value > grid.length) {
			throw new IllegalArgumentException("Value must be between 0 and " + grid.length);
		}
		grid[x][y] = value;
	}
	
	public Integer get(int x, int y) {
		if(isEmptySpace(x, y)) {
			return null;
		} else {
			return grid[x][y];
		}
	}
	
	
	private boolean isEmptySpace(int x, int y) {
		return grid[x][y] == -1; 
	}
	
	public Set<Integer> getPossibilities(int x, int y) {
		Set<Integer> possibles = null;
		
		if(isEmptySpace(x,y)) {
			
			possibles = getAllPossibles();
			
			//removes all existing elements from horizontal and vertical columns
			for(int i = 0; i < grid.length; i++) {
				possibles.remove(grid[x][i]);
				possibles.remove(grid[i][y]);
			}
			
			//removes from local square
			int subSquareSize = (int) Math.sqrt(grid.length);	//has been checked that the square root of size is an integer
			int startX = x / subSquareSize;
			int startY = y / subSquareSize;
			
			for(int i = 0; i < subSquareSize; i++) {
				for(int j = 0; j < subSquareSize; j++) {
					possibles.remove(grid[startX + i][startY + j]);
				}
			}
						
		}
		
		return possibles;
	}
	
	@Override
	public String toString() {
		String puzzle = "";
		for(int j = 0; j < grid.length; j++) {
			for(int i = 0; i < grid.length; i++) {
				Integer value = get(i,j);
				if(value == null) {
					puzzle += '-';
				} else {
					puzzle += value;
				}
			}
			puzzle += "\n";
		}
		
		return puzzle;
	}
	
	public int getSize() {
		return grid.length;
	}
	
	private Set<Integer> getAllPossibles() {
		Set<Integer> possibles = new HashSet<Integer>();
		for(int i = 1; i < grid.length; i++) {
			possibles.add(i);
		}
		return possibles;
	}
	
	public boolean validate() {
		for(int j = 0; j < getSize(); j++) {
			
			Set<Integer> xPossibles = getAllPossibles();
			Set<Integer> yPossibles = getAllPossibles();
			
			for(int i = 0; i < getSize(); i++) {
				yPossibles.remove(grid[j][i]);
				xPossibles.remove(grid[i][j]);
			}
			if(xPossibles.size() != 0 || yPossibles.size() != 0) {
				return false;
			}
		}
		return true;
	}
	
}
